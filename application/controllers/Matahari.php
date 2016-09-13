<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Matahari extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ourmodel','',TRUE);
        $this->load->model('crawlmodel','',TRUE);
    }


    public function product_mining()
    {
          $time_start = microtime(true);


          $count=$this->ourmodel->get_counter();
          $url=$this->crawlmodel->getMatahariUrl().$count;
          $keyword=$this->crawlmodel->getMatahariKeyword();
          $prod_regex='/(https?:\/\/.[^\/]*\/[^\/]+(\.html))|(\.html\&vg)/';


          //4. It will grab all href content for every link.
          $parse = parse_url($url);
          $host = $parse['host'];
          echo "Target url now is :".$url."<br><br>";
          $dom = new DOMDocument('1.0', 'UTF-8');
          $internalErrors = libxml_use_internal_errors(true); //This is to prevent displaying error and put in log only
          $dom->loadHTMLfile($url);
          libxml_use_internal_errors($internalErrors); //This is to prevent displaying error
          $countlink = 0;
          $insertlink = 0;
          foreach ($dom->getElementsByTagName('a') as $node) {
              $link = $node->getAttribute('href');
              if ((strpos($link, $host) !== false) or (preg_match('/\/.+/', $link))) {
                if (preg_match('/^\/.+/', $link)) {
                    $link='http://'.$host.$link;
                }



                      //7. If prod_regex exist (not empty) and match, it will remark as maybe_product=1
                        if ($prod_regex != '') {
                            if (preg_match($prod_regex, $link)) {
                              $data = array(
                                      'url' => $link,
                                      'category' => $keyword,
                                      'parent_url' => $url,
                                      'keyword'=>$keyword
                                    );
                              $try = $this->ourmodel->insert_matahari_crawl($link,$data);
                              if ($try) {
                                  ++$insertlink;
                                  echo "---INSERTED<br>";
                              } else {echo "---DUPLICATE DETECTED<br>";}
                                echo $link."<br>";
                                echo "MATCH PRODUCT ---- <br>";

                            }
                        }
                  ++$countlink;
              }
          }
          $data=array('value_'=>($count+1));
          $this->ourmodel->update_counter($data);
          echo 'Total link found in this page: '.$countlink.'<br>';
          echo 'Total link inserted: '.$insertlink.'<br>';
          echo '<br>Total execution time in seconds: '.(microtime(true) - $time_start);
    }

    public function product_scraping($limit = 10)
    //This is, we refer as script 2. The sole purpose is to get the content (from previously tagged 'maybe_product' by script 1) and save to database
    {
        $time_start = microtime(true); //Yeah. so later on I can show how long this script run


      //get hostid info, we need name xpath, price xpath, format regex if any.
      $hostinfo = $this->crawlmodel->getHostDetail(12);
        if ($hostinfo) {
            $name_xpath = $hostinfo[0]->name_xpath;
            $price_xpath = $hostinfo[0]->price_xpath;
            $brand_xpath = $hostinfo[0]->brand_xpath;
            $category_xpath = $hostinfo[0]->category_xpath;
            $sku_xpath = $hostinfo[0]->sku_xpath;
            $non_discount_xpath = $hostinfo[0]->no_discount_xpath;
            $discount_xpath = $hostinfo[0]->discount_xpath;
            $seller_xpath = $hostinfo[0]->seller_xpath;
            $format_regex = $hostinfo[0]->prod_regex;

            $target = $this->crawlmodel->get_matahari_scrap_target($limit);
            echo '<pre>';
            print_r($target);
            echo '</pre>';
            foreach ($target as $url) {

                //match with regex
                if ($format_regex != '') {
                    if (preg_match($format_regex, $url->url)) {
                        echo $url->url.' contain product data: <br><br>';
                        // DO THE EXTRACTION
                        $extract = $this->extractInfo($url->url, $name_xpath, $price_xpath, $brand_xpath, $category_xpath, $sku_xpath, $seller_xpath,$non_discount_xpath,$discount_xpath);
                        if ($extract['price']!='') {
                          $extract['url'] = $url->url;
                          $extract['url_list_id'] = $url->id;
                          $extract['host_id'] = 12;
                          $extract['category'] = $url->category;
                        }
                        $this->crawlmodel->insertCrawl($extract);
                        $this->crawlmodel->matahari_is_extracted($url->id);
                        echo '<pre>';
                        print_r($extract);
                        echo "</pre><br><br><br>";
                    } else {
                        echo $url->url.' NOT match regex<br>';
                    }
                }
            }
            $time = (microtime(true) - $time_start);
            $perurl = $time / $limit;
            echo '<br>On average, we extract data '.$perurl.'/url <br>';
            echo 'Total execution time in seconds: '.(microtime(true) - $time_start).' for '.$limit.' url.';
        } else {
          echo "The host ID is unknown.";
        }
    }


//THE MOST IMPORTANT OF ALLL
public function extractInfo($url, $namepath, $pricepath, $brand_xpath, $category_xpath, $sku_xpath, $seller_xpath,$non_discount_xpath,$discount_xpath)
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

        //get price non discount
        if ($non_discount_xpath!='')
        {$nprice = $xpath->query($non_discount_xpath);
        if (!is_null($nprice) && isset($nprice[0]->nodeValue)) {
            $data['price_non_discount'] = filter_var($price[0]->nodeValue, FILTER_SANITIZE_NUMBER_INT);
        } else {
            $data['price_non_discount'] = '';
        }}

        //get discount
        if ($discount_xpath!='')
        {$disc = $xpath->query($discount_xpath);
        if($disc!=false)
        { if (!is_null($disc) && isset($disc[0]->nodeValue)) {
            $data['discount'] = $disc[0]->nodeValue;
        } else {
            $data['discount'] = '';
        }}}

        //get brand
        if ($brand_xpath!='')
        {$brand = $xpath->query($brand_xpath);
        if($brand!=false)
        { if (!is_null($brand) && isset($brand[0]->nodeValue)) {
            $data['brand'] = $brand[0]->nodeValue;
        } else {
            $data['brand'] = '';
        }}}

        //get sku
        if ($sku_xpath!='')
        { $sku = $xpath->query($sku_xpath);
         if ($sku!=false)
        {if (!is_null($sku) && isset($sku[0]->nodeValue)) {
            $data['sku'] = $sku[0]->nodeValue;
        } else {
            $data['sku'] = '';
        }}}

        //get category
//         if ($category_xpath!='')
// {        $category = $xpath->query($category_xpath);
//         if ($category!=false)
//         {if (!is_null($category) && isset($category[0]->nodeValue)) {
//             $data['category'] = $category[0]->nodeValue;
//         } else {
//             $data['category'] = '';
//         }}}

        //get seller
        if ($seller_xpath!='')
{        $seller = $xpath->query($seller_xpath);
        if ($seller!=false)
        {if (!is_null($seller) && isset($seller[0]->nodeValue)) {
            $data['seller'] = $seller[0]->nodeValue;
        } else {
            $data['seller'] = '';
        }}}


    } else {
        $data = array('name' => '', 'price' => '');
    };

    return $data;
}


}
