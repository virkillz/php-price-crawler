<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Managesearch extends Auth_Controller
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


        $data['hasil'] = $this->ourmodel->get_keyword_summary();
        $this->load->view('manage_search',$data);
    }

    public function add_search() {
        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);


        $data['hasil'] = $this->ourmodel->get_host();
        $this->load->view('add_search',$data);
    }
}
