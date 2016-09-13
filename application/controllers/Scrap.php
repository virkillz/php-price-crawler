<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Scrap extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ourmodel','',TRUE);
        $this->load->helper('scraper');
        $this->load->helper("url");
        $this->load->library("pagination");
    }

    public function index()
    {
      $config = array();
      $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
      $config['first_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';
      $config['prev_tag_open'] = '<li>';
      $config['prev_tag_close'] = '</li>';
      $config['cur_tag_open'] = '<li><a href="#"><strong>';
      $config['cur_tag_close'] = '</strong></a></li>';
      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';
      // $config["full_tag_open"]="<li>";
      // $config["full_tag_close"]="</li>";
      $config["base_url"] = site_url('scrap');
      $config["total_rows"] = $this->ourmodel->getTotalProd();
      $config["per_page"] = 20;
      $config['num_links'] = 3;
      $config['use_page_numbers'] = TRUE;
      $config["uri_segment"] = 2;

      $this->pagination->initialize($config);

      $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
      $data["hasil"] = $this->ourmodel->fetch_all_product($config["per_page"], $page*$config["per_page"]);
      $data["links"] = $this->pagination->create_links();

        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);

        $this->load->view('master_scrap',$data);
    }



    public function product_detail($id=22)
    {
        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);

        $data['detail'] = $this->ourmodel->get_crawl_by_id($id);
        $this->load->view('product_detail',$data);
    }

}
