<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Links extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ourmodel','',TRUE);
        //$this->load->helper('scraper_helper');
        $this->load->helper('scraper');
        $this->load->helper("url");
        $this->load->library("pagination");
    }

    public function all()
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
      $config["base_url"] = site_url('links/all');
      $config["total_rows"] = $this->ourmodel->getTotalLink();
      $config["per_page"] = 20;
      $config['num_links'] = 3;
      $config['use_page_numbers'] = TRUE;
      $config["uri_segment"] = 3;

      $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
        $data["results"] = $this->ourmodel->fetch_all_link($config["per_page"], $page*$config["per_page"]);
        $data["links"] = $this->pagination->create_links();

        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);

        //$data['result']=$this->ourmodel->getAllLink();
        $this->load->view('master_link',$data);
    }

    public function add_link()
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
        $this->load->view('master_link_add',$data);
    }

    public function insert_link()
    {
        $data = array(
          'url' => $this->input->post('url'),
          'host_id' => $this->input->post('type')
        );

        //var_dump($data);
        $url = $this->input->post('url');
        $namepath='//*[@id="center_column"]/div[2]/div[2]/h1';
        $pricepath= '//*[@id="our_price_display"]';
        $try = scrapInfo($url,$namepath,$pricepath);
        var_dump($try);

        // $tryinsert = $this->ourmodel->insert_host($data);
        // if ($tryinsert!=false) {
        //   redirect('host','refresh');
        // } else {
        //   echo 'error at inserting';
        // }
    }

}
