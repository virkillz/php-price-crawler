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

    //----------------------------------------abaikan =----------------//

    public function action_test()
    {
      // to retrieve selected html data, try these DomXPath examples:
      $time_start = microtime(true);

      $file= $_POST['url'];
      $xmen = $_POST['xpath'];
      echo "Target : ".$file."<br>";
      echo "X-path : ".$xmen."<br>";
      $doc = new DOMDocument('1.0', 'UTF-8');

      $internalErrors = libxml_use_internal_errors(true);
      if ($doc->loadHTMLfile($file)) {
        libxml_use_internal_errors($internalErrors);

        $xpath = new DOMXpath($doc);

        $elements = $xpath->query($xmen);
        if (!is_null($elements) && isset($elements[0]->nodeValue)) {
        echo $elements[0]->nodeValue;
      } else {echo 'cannot found information based on xpath';}
        echo '<br>Total execution time in seconds: ' . (microtime(true) - $time_start);

      } else {
        echo 'cannot open the URL, please check in the browser.';
      };
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
