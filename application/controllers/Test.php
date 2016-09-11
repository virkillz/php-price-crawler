<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Test extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ourmodel','',TRUE);
    }

    public function index()
    {
        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);

        $this->load->view('test_view',$data);
    }

    public function dumphtml()
    {
      $url="http://tokopedia.com";
      $dom = new DOMDocument('1.0', 'UTF-8');
      $internalErrors = libxml_use_internal_errors(true); //This is to prevent displaying error and put in log only
      $dom->loadHTMLfile($url);
      libxml_use_internal_errors($internalErrors); //This is to prevent displaying error
      $somestring = $dom->saveHTML();
      $somestring = htmlspecialchars($somestring);

      echo $somestring;
    }

    public function crawling()
    {
        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);

        $this->load->view('test_crawl',$data);
    }

    public function test_search()
    {
        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);

        $data['hasil']=$this->ourmodel->get_host_search_not_empty();
        $this->load->view('test_search',$data);
    }

    public function test_search_action()
    {
    //1.get pattern from database and combine with keyword.
    $keyword=$this->input->post('keyword');
    $keyword=preg_replace('/\s/','+',$keyword);
    $target = $this->ourmodel->get_host_detail($this->input->post('hostid'));
    $targetpat = $target[0]->search_pattern;
    $url = preg_replace('/\{\{keyword\}\}/',$keyword,$targetpat);
    echo 'target : '.$url."<br>";

      $time_start = microtime(true);

      $blacklist_regex=$target[0]->blacklist_regex;
      $cat_regex=$target[0]->cat_regex;
      $prod_regex=$target[0]->prod_regex;

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
          if ((strpos($link, $host) !== false) or (preg_match('/\/.+/', $link))) {
            if (preg_match('/^\/.+/', $link)) {
                $link='http://'.$host.$link;
            }

            if (preg_match('/page/', $link)) {
                echo $link."<br>";
                echo 'NEXT PAGE DETECTED';
                  //masukin ke KATEGORI
            }

            //5. If blacklist_regex exist (not empty) and match, it will be ignored (escape foreach).
            if ($blacklist_regex != '') {
                if (preg_match($blacklist_regex, $link)) {
                    continue;
                }
            }

                  //7. If prod_regex exist (not empty) and match, it will remark as maybe_product=1
                    if ($prod_regex != '') {
                        if (preg_match($prod_regex, $link)) {
                                      echo $link."<br>";
                            echo "MAYBE PRODUCT ---- <br>";
                            //masukin ke URL
                        }
                    }
              ++$countlink;
          }
      }
      echo 'Total link found in this page: '.$countlink.'<br>';
      echo '<br>Total execution time in seconds: '.(microtime(true) - $time_start);

    }

    public function action_test_crawl()
    {
        $time_start = microtime(true);
        $global_blacklist = $this->ourmodel->settings_get_blacklist();
          $url=$_POST['url'];
          $blacklist_regex=$_POST['isblacklist'];
          $cat_regex=$_POST['iscat'];
          $prod_regex=$_POST['isprod'];

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
              if ((strpos($link, $host) !== false) or (preg_match('/\/.+/', $link))) {
                if (preg_match('/^\/.+/', $link)) {
                    $link='http://'.$host.$link;
                }

                echo $link."<br>";

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
                      echo "IGNORED ---- <br>";
                        continue;
                    }
                }

                //6. If category_regex exist (not empty) and match, it will remark as is_cat=1
                if ($cat_regex != '') {
                    if (preg_match($cat_regex, $link)) {
                        echo "CATEGORY ---- <br>";
                    }
                }


                      //7. If prod_regex exist (not empty) and match, it will remark as maybe_product=1
                        if ($prod_regex != '') {
                            if (preg_match($prod_regex, $link)) {
                                echo "MAYBE PRODUCT ---- <br>";
                            }
                        }

                        echo "<br>";
                  ++$countlink;
              }
          }
          echo 'Total link found in this page: '.$countlink.'<br>';
          echo '<br>Total execution time in seconds: '.(microtime(true) - $time_start);
    }


    //----------------------------------------abaikan =----------------//

    public function action_test()
    {
      // to retrieve selected html data, try these DomXPath examples:
      $time_start = microtime(true);

      $file= $_POST['url'];
      $xmen = $_POST['xpath'];
      $data['message'] = "Target : ".$file."<br>";
      $data['message'] .= "X-path : ".$xmen."<br>";
      $doc = new DOMDocument('1.0', 'UTF-8');

      $internalErrors = libxml_use_internal_errors(true);
      if ($doc->loadHTMLfile($file)) {
        libxml_use_internal_errors($internalErrors);

        $xpath = new DOMXpath($doc);

        $elements = $xpath->query($xmen);
        if (!is_null($elements) && isset($elements[0]->nodeValue)) {
        $data['message'] .= $elements[0]->nodeValue;
      } else {$data['message'] .= 'cannot found information based on xpath';}

      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->load->view('header', $data);
      $this->load->view('topbar', $session_data);
      $this->load->view('sidebar', $session_data);
      $somestring = $doc->saveHTML();
      $somestring = htmlspecialchars($somestring);

      $data['message'] .= 'Source Code: <br><pre><code class="language-markup" id="bar">'.$somestring.'</code></pre>';

      $data['message'] .=  '<button class="btn" data-clipboard-target="#bar">
                                Copy to clipboard
                            </button>';

      $data['message'] .= '<br>Total execution time in seconds: ' . (microtime(true) - $time_start);
      } else {
        $data['message'] .= 'cannot open the URL, please check in the browser.';
      };
      $this->load->view('blank',$data);
    }
    //
    // public function insert_host()
    // {    $this->load->helper('security');
    //      $this->load->library('form_validation');
    //      $this->form_validation->set_rules('name', 'Website Name', 'required|xss_clean|is_unique[host.host_name]');
    //      $this->form_validation->set_rules('url', 'Example URL', 'required|xss_clean|is_unique[host.example_url]|callback_valid_url',array('valid_url'=>'Example URL invalid.'));
    //      $this->form_validation->set_rules('starturl', 'Starter URL', 'required|xss_clean|callback_valid_url',array('valid_url'=>'Starter URL invalid.'));
    //
    //
    //      if($this->form_validation->run() == FALSE)
    //      {
    //        $session_data = $this->session->userdata('logged_in');
    //        $data['username'] = $session_data['username'];
    //        $this->load->view('header', $data);
    //        $this->load->view('topbar', $session_data);
    //        $this->load->view('sidebar', $session_data);
    //        $this->load->view('master_host_add');
    //      }
    //      else
    //      {
    //        $data = array(
    //          'host_name' => $this->input->post('name'),
    //          'example_url' => $this->input->post('url'),
    //          'starter_url' => $this->input->post('starturl'),
    //          'name_xpath' => $this->input->post('namepath'),
    //          'price_xpath' => $this->input->post('pricepath'),
    //          'remarks' => $this->input->post('desc')
    //        );
    //        $tryinsert = $this->ourmodel->insert_host($data);
    //        if ($tryinsert!=false) {
    //          redirect('host','refresh');
    //        } else {
    //          echo 'error at inserting';
    //        }
    //      }
    //
    //
    // }
    //
    // function valid_url($url)
    // {
    //   return filter_var($url, FILTER_VALIDATE_URL);
    // }
}
