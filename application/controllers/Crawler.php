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
        //so, anytime you see $this->crawlmodel->something() and dont know what it does, goes to application/model/crawlmodel.php and go to something() line. You will understand.
        //everything related to database is in here.
        $this->load->model('crawlmodel', '', true);
        $this->load->model('ourmodel', '', true);
    }

    public function summarizer()
    {
      $summary_url_list = $this->crawlmodel->summary_url_list();

      $data=array(
        'total_url' => $summary_url_list[0]->links,
        'total_maybe_product' => $summary_url_list[0]->maybe_prod,
        'total_category' => $summary_url_list[0]->is_category,
        'total_scrap' => $summary_url_list[0]->is_extracted,
        'total_crawl' => $summary_url_list[0]->is_crawled,
      );

      $data['total_product'] = $this->ourmodel->getTotalProd();

      $this->crawlmodel->insert_summary($data);
    }


    public function searchcrawler()
    {
      /*
          1. Get the search keyword and turn into + concat
          2. get list of host from database. loop!
          3. execute! get link from each page.
          4. if found product link, input product link to url_list . (check if already exist, if exist, get the id, if not exist, insert and return back the new id).
          5. insert keyword and link id to keyword table.
          6. if found next link, put into url_list and mark as is_search=1.
      */
      $time_start = microtime(true);
      $keyword_awal=$this->input->post('keyword');
      $keyword=preg_replace('/\s/','+',$keyword_awal);
      $hosts = $this->ourmodel->get_host_search_not_empty();

      foreach ($hosts as $host) {
      echo $hostid = $host->id;
      echo '<br>';
      echo $prod_regex = $host->prod_regex;
      $blacklist_regex = $host->blacklist_regex;
      echo '<br>';
      $search_pattern = $host->search_pattern;
      echo $url = preg_replace('/\{\{keyword\}\}/',$keyword,$search_pattern);
      echo '<br>';
      echo '<br>-----------------<br>';
      echo 'This is the result :<br>';

      $parse = parse_url($url);
      $host = $parse['host'];

      $dom = new DOMDocument('1.0', 'UTF-8');
      $internalErrors = libxml_use_internal_errors(true); //This is to prevent displaying error and put in log only
      $dom->loadHTMLfile($url);
      libxml_use_internal_errors($internalErrors); //This is to prevent displaying error
      foreach ($dom->getElementsByTagName('a') as $node) {
          $link = $node->getAttribute('href');
          if ((strpos($link, $host) !== false) or (preg_match('/^\/.+/', $link))) {
            //if link are relative, make it absolute
            if (preg_match('/^\/.+/', $link)) {
                $link='http://'.$host.$link;
            }

            //5. If blacklist_regex exist (not empty) and match, it will be ignored (escape foreach).
            if ($blacklist_regex != '') {
                if (preg_match($blacklist_regex, $link)) {
                    continue;
                }
            }

            $data = array(
                    'url' => $link,
                    'host_id' => $hostid,
                    'parent_url' => $url,
                    'keyword' => $keyword_awal
                  );


            //if it is page, say it is page.
            if (preg_match('/page/', $link)) {
                echo $link."<br>";
                echo 'NEXT PAGE DETECTED';
                  //masukin ke KATEGORI
                  $data['maybe_product'] = 0;
                  $this->crawlmodel->insertLink($link, $data);
            }

                  //7. If prod_regex exist (not empty) and match, it will remark as maybe_product=1
            if ($prod_regex != '') {
                if (preg_match($prod_regex, $link)) {
                    echo $link."<br>";
                    echo "MAYBE PRODUCT ---- <br>";
                $data['maybe_product'] = 1;
                $try = $this->crawlmodel->insert_link_from_search($link, $data);
                $datax = array(
                  'keyword' => $keyword_awal,
                  'url_list_id' => $try
                );
                echo $try."<------- NOMOR link ID <br>";
                $this->crawlmodel->insert_keyword($datax);
                }
            }

          }
      }
    //  echo 'Total link found in this page: '.$countlink.'<br>';
      echo '<br>Total execution time in seconds: '.(microtime(true) - $time_start);

      }

    }

    public function searchnext()
    {
      /*  the purpose is to follow up initial search function.
          1. Get random from the url_list where is_search = 1 and is_crawled = 0 (ensure update the other crawler to ignore is_search to avoid duplicate crawl)
          2. get list of host from database. loop!
          3. execute! get link from each page.
          4. if found product link, input product link to url_list . (check if already exist, if exist, get the id, if not exist, insert and return back the new id).
          5. insert keyword and link id to keyword table.
          6. if found next link, cek in url, if exist, ignore. if not, insert.
      */
    }


    public function searchscrap()
    {
      /*
      1. get random id from keyword where crawl_result_id=''.
      2. find from crawl_result where url_list_id = current. url_list_id.
      3. if not found: lempar ke pencari. masukin ke crawl_result.
      4. update the keyword table.
      */
    }

    public function linkminer($hostid = 0)
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
      $global_blacklist = $this->ourmodel->settings_get_blacklist();

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
                echo 'Current target : '.$url.'<br><br> And this is The result: <br>';
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


            if ((strpos($link, $host.'.') !== false) or (preg_match('/\/.+/', $link))) {
                if (preg_match('/^\/.+/', $link)) {
                    $link = 'http://'.$host.$link;
                }

            echo $link.' has been inserted.<br>';

            //Check GLOBAL BLACKLIST
            if ($global_blacklist != '') {
                if (preg_match($global_blacklist, $link)) {
                  echo "---GLOBAL BLACKLIST DETECTED<br>";
                    continue;
                }
            }

              //5. If blacklist_regex exist (not empty) and match, it will be ignored (escape foreach).
              if ($blacklist_regex != '') {
                  if (preg_match($blacklist_regex, $link)) {
                    echo "---BLACKLIST DETECTED<br>";
                      continue;
                  }
              }

              //6. If category_regex exist (not empty) and match, it will remark as is_cat=1
              if ($cat_regex != '') {
                  if (preg_match($cat_regex, $link)) {
                      $is_category = 1;
                        echo "---CATEGORY DETECTED<br>";
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
                                echo "---PRODUCT DETECTED<br>";
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
                        'parent_url' => $url,
                        'is_category' => $is_category,
                      );
                $try = $this->crawlmodel->insertLink($link, $data);
                if ($try) {
                    ++$insertlink;
                    echo "---INSERTED<br>";
                } else {echo "---DUPLICATE DETECTED<br>";}
                ++$countlink;
                                  echo "<br>";
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
            $brand_xpath = $hostinfo[0]->brand_xpath;
            $category_xpath = $hostinfo[0]->category_xpath;
            $sku_xpath = $hostinfo[0]->sku_xpath;
            $seller_xpath = $hostinfo[0]->seller_xpath;
            $format_regex = $hostinfo[0]->prod_regex;

            $target = $this->crawlmodel->getExtractTarget($hostid, $limit);
            foreach ($target as $url) {
                $namepath = $url->name_xpath;
                $pricepath = $url->price_xpath;

                //match with regex
                if ($format_regex != '') {
                    if (preg_match($format_regex, $url->url)) {
                        echo $url->url.' contain product data: <br>';
                        // DO THE EXTRACTION
                        $extract = $this->extractInfo($url->url, $namepath, $pricepath, $brand_xpath, $category_xpath, $sku_xpath, $seller_xpath);
                        if ($extract['price']!='') {
                          $extract['url'] = $url->url;
                          $extract['url_list_id'] = $url->idx;
                          $extract['host_id'] = $hostid;
                          $this->crawlmodel->insertCrawl($extract);
                        }
                        $this->crawlmodel->tag_is_extracted($url->idx);
                        var_dump($extract);
                        echo "<br><br><br>";
                    } else {
                        echo $url->url.' NOT match regex<br>';
                        $this->crawlmodel->tag_is_extracted($url->idx);
                    }
                } else {
                    //tandanya info tentang format produk ga ada dari awal. ya sudah asal sikat saja
                    $extract = $this->extractInfo($url->url, $namepath, $pricepath, $brand_xpath, $category_xpath, $sku_xpath, $seller_xpath);
                    if ($extract['price']!='') {
                      $extract['url'] = $url->url;
                      $extract['url_list_id'] = $url->idx;
                      $extract['host_id'] = $hostid;
                      $this->crawlmodel->insertCrawl($extract);
                      $this->crawlmodel->tag_is_extracted($url->idx);
                    }
                    $this->crawlmodel->tag_is_extracted($url->idx);
                    var_dump($extract);
                    echo "<br><br><br>";



                    echo $url->url.'<br>';
                }
            }
            $time = (microtime(true) - $time_start);
            $perurl = $time / $limit;
            echo '<br>On average, we extract data '.$perurl.'/url <br>';
            echo 'Total execution time in seconds: '.(microtime(true) - $time_start).' for '.$limit.' url.';
            echo 'Which means you better ';
        } else {
          echo "The host ID is unknown.";
        }
    }


    public function contentupdater($hostid = 0, $limit = 10) //Lets call this worker, Ricky
    //This is, we refer as script 2. The sole purpose is to get the content (from previously tagged 'maybe_product' by script 1) and save to database
    {
        $time_start = microtime(true); //Yeah. so later on I can show how long this script run

      //if no predefined id, get random from database
      if ($hostid == 0) {
          $hostid = $this->crawlmodel->RandomUpdateHost();
      }

      //get hostid info, we need name xpath, price xpath, format regex if any.
      $hostinfo = $this->crawlmodel->getHostDetail($hostid);
        if ($hostinfo) {
            echo $hostinfo[0]->host_name.' is now the target <br>';
            $name_xpath = $hostinfo[0]->name_xpath;
            $price_xpath = $hostinfo[0]->price_xpath;
            $brand_xpath = $hostinfo[0]->brand_xpath;
            $category_xpath = $hostinfo[0]->category_xpath;
            $sku_xpath = $hostinfo[0]->sku_xpath;
            $seller_xpath = $hostinfo[0]->seller_xpath;
            $format_regex = $hostinfo[0]->prod_regex;

            $target = $this->crawlmodel->getUpdateTarget($hostid, $limit);
            foreach ($target as $url) {
                        echo $url->id.'<br>';
                        // DO THE EXTRACTION
                        $extract = $this->extractInfo($url->url, $name_xpath, $price_xpath, $brand_xpath, $category_xpath, $sku_xpath, $seller_xpath);
                        $id = $url->id;
                        if ($extract['price']=='') {
                          $extract['name']='404';
                        }
                        $extract['update_by']='Ricky: sytem updater';
                        $this->crawlmodel->updateResult($id, $extract);
                        var_dump($extract);
                        echo "<br><br><br>";

            }
            $time = (microtime(true) - $time_start);
            $perurl = $time / $limit;
            echo '<br>On average, we extract data '.$perurl.'/url <br>';
            echo 'Total execution time in seconds: '.(microtime(true) - $time_start).' for '.$limit.' url.';
            echo 'Which means you better ';
        } else {
          echo "The host ID is unknown.";
        }
    }


//THE MOST IMPORTANT OF ALLL
public function extractInfo($url, $namepath, $pricepath, $brand_xpath, $category_xpath, $sku_xpath, $seller_xpath)
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

        //get brand
        if ($brand_xpath!='')
{        $brand = $xpath->query($brand_xpath);
        if($brand!=false)
        { if (!is_null($brand) && isset($brand[0]->nodeValue)) {
            $data['brand'] = $brand[0]->nodeValue;
        } else {
            $data['brand'] = '';
        }}}

        //get sku
        if ($sku_xpath!='')
{         $sku = $xpath->query($sku_xpath);
         if ($sku!=false)
        {if (!is_null($sku) && isset($sku[0]->nodeValue)) {
            $data['sku'] = $sku[0]->nodeValue;
        } else {
            $data['sku'] = '';
        }}}

        //get category
        if ($category_xpath!='')
{        $category = $xpath->query($category_xpath);
        if ($category!=false)
        {if (!is_null($category) && isset($category[0]->nodeValue)) {
            $data['category'] = $category[0]->nodeValue;
        } else {
            $data['category'] = '';
        }}}

        //get seller
        if ($seller_xpath!='')
{        $seller = $xpath->query($seller_xpath);
        if ($category!=false)
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
