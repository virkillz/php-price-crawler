<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

//Not inherited from Auth_controller, so we can excecute this without login. Don't know why I should explain this.
class Sniper extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('crawlmodel', '', true);
        $this->load->model('snipermodel', '', true);
    }


    public function lazada_crawling()
    //Tujuan dari sniper lazada crawling adalah customized script untuk dapet data url produk sebanyak banyaknya dalam waktu sesingkat singkatnya.
    {
      echo $this->db->last_query();
      $time_start = microtime(true);
      //check if any website in host table not yet crawl

          $LinkNotYetCrawl = $this->crawlmodel->LinkNotYetCrawl(6);
          if ($LinkNotYetCrawl != false) {
              $url = $LinkNotYetCrawl[0]->url;
              $hostid = $LinkNotYetCrawl[0]->host_id;
              $prod_regex = $LinkNotYetCrawl[0]->prod_regex;
              echo $url;
              $this->crawlmodel->LinkTagCrawl($url);
          } else {
              echo 'all link already crawled, which is weird.';
              die();
          }


       //LET the mining begin!
        $parse = parse_url($url);
        $host = $parse['host'];

        $dom = new DOMDocument('1.0', 'UTF-8');
        $internalErrors = libxml_use_internal_errors(true); //This is to prevent displaying error and put in log only
        $dom->loadHTMLfile($url);
        libxml_use_internal_errors($internalErrors); //This is to prevent displaying error
        $countlink = 0;
        $insertlink = 0;
        foreach ($dom->getElementsByTagName('a') as $node) {
            $link = $node->getAttribute('href');
            if (strpos($link, $host) !== false) {

                      //cek regex
                      if ($prod_regex != '') {
                          if (preg_match($prod_regex, $link)) {
                              $maybe_product = 1;
                          } else {
                              $maybe_product = 0;
                          }
                      } else {
                          $maybe_product = 0;
                      }

                      //cek iscat
                      if ((strpos($link,'jual') !== false) or (strpos($link,'beli') !== false)) {
                          $iscat=1;
                      } else {$iscat=1;}

                $data = array(
                        'url' => $link,
                        'host_id' => $hostid,
                        'maybe_product' => $maybe_product,
                        'parent_url' => $url,
                        'is_category' => $iscat
                      );
                $try = $this->crawlmodel->insertLink($link, $data);
                if ($try) {
                    echo $link.' has been inserted.<br>';
                    ++$insertlink;
                }
                ++$countlink;
            }
        }
        echo 'Total link found in this page: '.$countlink.'<br>';
        echo 'Total link inserted in this page: '.$insertlink.'. The rest are duplicate <br>';
        echo '<br>Total execution time in seconds: '.(microtime(true) - $time_start);
    }


    public function contentminer($hostid = 0, $limit = 10)
    //This is, we refer as script 2. The sole purpose is to get the content (from previously tagged 'maybe_product' by script 1) and save to database
    {
        $time_start = microtime(true); //Yeah. so later on I can show how long this script run

      //if no predefined id, get random from database
      if ($hostid == 0) {
          $hostid = $this->crawlmodel->RandomHost();
      }

      //get hostid info, we need name xpath, price xpath, format regex if any.
      $hostinfo = $this->crawlmodel->getHostDetail($hostid);
        if ($hostinfo) {
            $name_xpath = $hostinfo[0]->name_xpath;
            $price_xpath = $hostinfo[0]->price_xpath;
            $format_regex = $hostinfo[0]->prod_regex;

            $target = $this->crawlmodel->getExtractTarget($hostid, $limit);
            foreach ($target as $url) {
                $namepath = $url->name_xpath;
                $pricepath = $url->price_xpath;

                //match with regex
                if ($format_regex != '') {
            if (preg_match($format_regex, $url->url)) {
                echo $url->url.' match regex <br>';
                // DO THE EXTRACTION
                $extract = $this->extractInfo($url->url, $namepath, $pricepath);
                $extract['url'] = $url->url;
                $extract['url_list_id'] = $url->id;
                $extract['host_id'] = $hostid;
                $this->crawlmodel->insertCrawl($extract);
                $this->crawlmodel->tag_is_extracted($url->idx);
            } else {
                echo $url->url.' NOT match regex<br>';
              $this->crawlmodel->tag_is_extracted($url->idx);
            }
                } else {
                    echo $url->url.'<br>';
                }
            }
        }

      echo '<br>Total execution time in seconds: '.(microtime(true) - $time_start);
    }



//THE MOST IMPORTANT OF ALLL
public function extractInfo($url, $namepath, $pricepath)
//This is main algoritm to extract info from url to get the data based on its xpath.
{
    $doc = new DOMDocument('1.0', 'UTF-8');

    $internalErrors = libxml_use_internal_errors(true);
    if ($doc->loadHTMLfile($url)) {
        libxml_use_internal_errors($internalErrors);
        $xpath = new DOMXpath($doc);

    //get name
    $elements = $xpath->query($namepath);
        if (!is_null($elements) && isset($elements[0]->nodeValue)) {
            $data['name'] = $elements[0]->nodeValue;
        } else {
            $data['name'] = '';
        }

  //get price
  $price = $xpath->query($pricepath);
        if (!is_null($price) && isset($price[0]->nodeValue)) {
            $data['price'] = filter_var($price[0]->nodeValue, FILTER_SANITIZE_NUMBER_INT);
        } else {
            $data['price'] = '';
        }
    } else {
        $data = array('name' => '', 'price' => '');
    };

    return $data;
}


    //wiping the old product already marked as maybe_product =0
    public function maybe_product_exe($hostid)
    {
        //get all product yang host_id=4
      $results = $this->crawlmodel->getZeroMaybe($hostid);
        foreach ($results as $result) {
            if (preg_match('/https?:\/\/.[^\/]*\/[^\/]+(.html)/', $result->url)) {
                $data['maybe_product'] = 1;
                echo 'update data url '.$result->url.' maybe product is '.$data['maybe_product'].'<br>';
                $this->crawlmodel->updateMaybeProduct($result->url, $data);
            }
        }
    }
}
