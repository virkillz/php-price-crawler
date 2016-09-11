<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Settings extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ourmodel','',TRUE);
    }

    public function blacklist()
    {
        if ($this->session->userdata('locked')) {
            $this->session->unset_userdata('locked');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view('sidebar', $session_data);

        $data['blackregex'] = $this->ourmodel->settings_get_blacklist();
        $this->load->view('setting_blacklist',$data);
    }

    public function update_blacklist()
    {
      $data=array(
        'value_'=>$this->input->post('blackregex')
      );
      $this->ourmodel->setting_update_blacklist($data);

      redirect('settings/blacklist','refresh');
    }

    }

?>
