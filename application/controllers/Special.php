<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Special extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ourmodel','',TRUE);
        $this->load->model('crawlmodel','',TRUE);
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
        $data['hasil'] = $this->ourmodel->get_host();
        $this->load->view('action_special_crawl',$data);
    }

    public function crawl_action()
    {
        $time_start = microtime(true);
          $url=$_POST['url'];
          $hostid=$this->input->post('type');
          $keyword=$this->input->post('keyword');
          $host_detail=$this->ourmodel->get_host_detail($hostid);
          $prod_regex=$host_detail[0]->prod_regex;
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
                                      'host_id' => $hostid,
                                      'maybe_product' => 1,
                                      'parent_url' => $url,
                                      'keyword'=>$keyword
                                    );
                              $try = $this->crawlmodel->insertLink($link, $data);
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
