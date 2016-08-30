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
        $this->load->view('master_link');
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
