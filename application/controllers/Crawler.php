<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

//Not inherited from Auth_controller, so we can excecute this without login. Don't know why I should explain this.
class Crawler extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('crawlmodel', '', true);
    }


    public function linkminer($hostid=0 )
    //This is refer to script 1. The purpose is to gather link
    //1. if no parameter, it will search random host to process.
    //2. It will search new host not yet been crawled, if any, grab starter_url.
    //3. If number 2 not exist, it will get random link from url_list.url to be crawled.
    //4. It will grab all href content for every link.
    //5. If blacklist_regex exist (not empty) and match, it will be ignored (escape foreach).
    //6. If category_regex exist (not empty) and match, it will remark as is_cat=1
    //7. If prod_regex exist (not empty) and match, it will remark as maybe_product=1
    //8. store in url_list
    {
      //1. if no parameter, it will search random host to process.
      if ($hostid == 0) {
          $hostid = $this->crawlmodel->RandomHost();
      }

      $time_start = microtime(true);

      //2. It will search new host not yet been crawled, if any, grab starter_url.
      $HostNotYetCrawl = $this->crawlmodel->HostNotYetCrawl();

      if ($HostNotYetCrawl) {

        //main ingredient
          $url = $HostNotYetCrawl[0]->starter_url;
          $hostid = $HostNotYetCrawl[0]->id;
          $prod_regex = $HostNotYetCrawl[0]->prod_regex;
          $cat_regex = $HostNotYetCrawl[0]->cat_regex;
          $blacklist_regex = $HostNotYetCrawl[0]->blacklist_regex;
        //tag even before process
        $this->crawlmodel->HostTagCrawl($hostid);
      } else {
        //3. If number 2 not exist, it will get random link from url_list.url to be crawled.
          $LinkNotYetCrawl = $this->crawlmodel->LinkNotYetCrawl($hostid);
          if ($LinkNotYetCrawl != false) {
              $url = $LinkNotYetCrawl[0]->url;
              $hostid = $LinkNotYetCrawl[0]->host_id;
              $prod_regex = $LinkNotYetCrawl[0]->prod_regex;
              $cat_regex = $LinkNotYetCrawl[0]->cat_regex;
              $blacklist_regex = $LinkNotYetCrawl[0]->blacklist_regex;
              echo 'Current target : '.$url."<br><br> And this is The result: <br>";
              $this->crawlmodel->LinkTagCrawl($url);
          } else {
              echo 'all link already crawled, which is weird.';
              die();
          }
      }

        //4. It will grab all href content for every link.
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


              //5. If blacklist_regex exist (not empty) and match, it will be ignored (escape foreach).
              if ($blacklist_regex != '') {
                  if (preg_match($blacklist_regex, $link)) {
                      continue;
                  }
              }

              //6. If category_regex exist (not empty) and match, it will remark as is_cat=1
              if ($cat_regex != '') {
                  if (preg_match($cat_regex, $link)) {
                      $is_category = 1;
                  } else {
                      $is_category = 0;
                  }
              } else {
                  $is_category = 0;
              }


                    //7. If prod_regex exist (not empty) and match, it will remark as maybe_product=1
                      if ($prod_regex != '') {
                          if (preg_match($prod_regex, $link)) {
                              $maybe_product = 1;
                          } else {
                              $maybe_product = 0;
                          }
                      } else {
                          $maybe_product = 0;
                      }

              //8. store in url_list
                $data = array(
                        'url' => $link,
                        'host_id' => $hostid,
                        'maybe_product' => $maybe_product,
                        'parent_url' => $url
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
