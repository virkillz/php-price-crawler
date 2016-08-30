<?php
class Auth_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        {
            redirect('login');
        }

        if($this->session->userdata('locked')) {
		 $this->session->unset_userdata('locked');
	 	}



    }
}
