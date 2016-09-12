<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Broadcaster extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ourmodel','',TRUE);
    }

    public function product($startid=0,$limit=100)
    {
      $result = $this -> ourmodel ->get_crawl_result($startid,$limit);
      $result=json_encode($result);
      echo $result;
    }

    }

?>
