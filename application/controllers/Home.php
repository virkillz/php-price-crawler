<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends Auth_Controller
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

        $data['allhost'] = $this->ourmodel->getTotalHost();
        $data['alllink'] = $this->ourmodel->getTotalLink();
        $data['allprod'] = $this->ourmodel->getTotalProd();
        $data['allpotprod'] = $this->ourmodel->getTotalPotentialProd();

        $this->load->view('home_view',$data);
    }


    public function getFullName()
    {
        return $this->session->userdata('fullname');
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }
}
