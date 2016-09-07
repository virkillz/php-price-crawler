<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Host extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ourmodel','',TRUE);
    }

    public function index() {
        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);


        $data['hasil'] = $this->ourmodel->get_host();
        $this->load->view('master_host',$data);
    }

    public function detail($id=1)
    {
        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);

        $data['details']= $this->ourmodel->get_host_detail($id);
        if ($data['details']) {
          $data['alllink']= $this->ourmodel->count_all_link($id);
          $data['allpotprod']= $this->ourmodel->count_all_potential($id);
          $data['allproduct']= $this->ourmodel->count_all_product($id);
          $data['iscrawled']= $this->ourmodel->count_iscrawled($id);
          $data['isscraped']= $this->ourmodel->count_isscraped($id);
          $this->load->view('master_host_detail',$data);
        } else {
          $data['message']="We cannot find the id you are looking for.";
          $this->load->view('blank',$data);
        }
    }

    public function edit($id=1)
    { $this->load->helper('security');
      $this->load->library('form_validation');
        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);

        $data['details']= $this->ourmodel->get_host_detail($id);
        if ($data['details']) {
          $this->load->view('master_host_edit',$data);
        } else {
          $data['message']="We cannot find the id you are looking for.";
          $this->load->view('blank',$data);
        }
    }


    public function add_host()
    {  $this->load->helper('security');
      $this->load->library('form_validation');
        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);
        $this->load->view('master_host_add');
    }

    public function update_host()
    {    $this->load->helper('security');
         $this->load->library('form_validation');
         $this->form_validation->set_rules('name', 'Website Name', 'required|xss_clean');
         $this->form_validation->set_rules('url', 'Example URL', 'required|xss_clean|callback_valid_url',array('valid_url'=>'Example URL invalid.'));
         $this->form_validation->set_rules('starturl', 'Starter URL', 'required|xss_clean|callback_valid_url',array('valid_url'=>'Starter URL invalid.'));
        $id=$this->input->post('id');

         if($this->form_validation->run() == FALSE)
         {
           $data['details']= $this->ourmodel->get_host_detail($id);
           $session_data = $this->session->userdata('logged_in');
           $data['username'] = $session_data['username'];
           $this->load->view('header', $data);
           $this->load->view('topbar', $session_data);
           $this->load->view('sidebar', $session_data);
           $this->load->view('master_host_edit',$data);
         }
         else
         {
           $data = array(
             'host_name' => $this->input->post('name'),
             'example_url' => $this->input->post('url'),
             'starter_url' => $this->input->post('starturl'),
             'name_xpath' => $this->input->post('namepath'),
             'prod_regex' => $this->input->post('regex'),
             'price_xpath' => $this->input->post('pricepath'),
             'sku_xpath' => $this->input->post('skupath'),
             'category_xpath' => $this->input->post('catpath'),
             'brand_xpath' => $this->input->post('brandpath'),
             'seller_xpath' => $this->input->post('sellerpath'),
             'is_crawled' => $this->input->post('iscrawled'),
             'cat_regex' => $this->input->post('iscat'),
             'blacklist_regex' => $this->input->post('blacklistregex'),
             'remarks' => $this->input->post('desc'),
             'search_pattern' => $this->input->post('searchpat')
           );

          $this->ourmodel->update_host($id,$data);
          redirect('host/detail/'.$id,'refresh');
         }
    }


    public function insert_host()
    {    $this->load->helper('security');
         $this->load->library('form_validation');
         $this->form_validation->set_rules('name', 'Website Name', 'required|xss_clean|is_unique[host.host_name]');
         $this->form_validation->set_rules('url', 'Example URL', 'required|xss_clean|is_unique[host.example_url]|callback_valid_url',array('valid_url'=>'Example URL invalid.'));
         $this->form_validation->set_rules('starturl', 'Starter URL', 'required|xss_clean|callback_valid_url',array('valid_url'=>'Starter URL invalid.'));


         if($this->form_validation->run() == FALSE)
         {
           $session_data = $this->session->userdata('logged_in');
           $data['username'] = $session_data['username'];
           $this->load->view('header', $data);
           $this->load->view('topbar', $session_data);
           $this->load->view('sidebar', $session_data);
           $this->load->view('master_host_add');
         }
         else
         {
           $data = array(
             'host_name' => $this->input->post('name'),
             'example_url' => $this->input->post('url'),
             'starter_url' => $this->input->post('starturl'),
             'name_xpath' => $this->input->post('namepath'),
             'prod_regex' => $this->input->post('regex'),
             'price_xpath' => $this->input->post('pricepath'),
             'sku_xpath' => $this->input->post('skupath'),
             'category_xpath' => $this->input->post('catpath'),
             'brand_xpath' => $this->input->post('brandpath'),
             'seller_xpath' => $this->input->post('sellerpath'),
             'cat_regex' => $this->input->post('iscat'),
             'blacklist_regex' => $this->input->post('blacklistregex'),
             'remarks' => $this->input->post('desc'),
             'search_pattern' => $this->input->post('searchpat')
           );
           $tryinsert = $this->ourmodel->insert_host($data);
           if ($tryinsert!=false) {
             redirect('host','refresh');
           } else {
             echo 'error at inserting';
           }
         }


    }

    function valid_url($url)
    {
      return filter_var($url, FILTER_VALIDATE_URL);
    }
}
