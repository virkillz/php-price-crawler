<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Export extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ourmodel','',TRUE);
        $this->load->helper(array('form', 'url'));
        $this->load->helper('download');
        $this->load->library('excel');
    }

    public function index()
    {
    $doc = new PHPExcel();
    //activate worksheet number 1
    $doc->setActiveSheetIndex(0);
    //name the worksheet
    $doc->getActiveSheet()->setTitle('Users list');


    // get all users in array formate
    $users = $this->ourmodel->get_crawl();

    $users = json_decode(json_encode($users), true);

    // read data to active sheet
    $doc->getActiveSheet()->fromArray($users, null, 'A1');

    $filename='just_some_random_name.xls'; //save our workbook as this file name

    header('Content-Type: application/vnd.ms-excel'); //mime type

    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

    header('Cache-Control: max-age=0'); //no cache

    //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
    //if you want to save it as .XLSX Excel 2007 format

    $objWriter = PHPExcel_IOFactory::createWriter($doc, 'Excel5');

    //force user to download the Excel file without writing it to server's HD
    $objWriter->save('php://output');
}

public function crawlexport()
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
  $this->load->view('crawlexport',$data);
}

public function crawlexport_action()
{
  if ($_POST['host']!='0'){
    $where1=" AND host_id =".$_POST['host'];
  } else {$where1='';}

  if ($_POST['iscrawled']!='2'){
    $where2=" AND is_crawled =".$_POST['iscrawled'];
  } else {$where2='';}

  if ($_POST['isscraped']!='2'){
    $where3=" AND is_scraped =".$_POST['isscraped'];
  } else {$where3='';}

  if ($_POST['iscat']!='2'){
    $where4=" AND is_category =".$_POST['iscat'];
  } else {$where4='';}

  if ($_POST['isprod']!='2'){
    $where5=" AND maybe_product =".$_POST['isprod'];
  } else {$where5='';}

  // $sql= "SELECT * from url_list WHERE 1=1".$where1.$where2.$where3.$where4.$where5;
  // echo $sql;
  $doc = new PHPExcel();
  //activate worksheet number 1
  $doc->setActiveSheetIndex(0);
  //name the worksheet
  $doc->getActiveSheet()->setTitle('Users list');


  // get all users in array formate
  $users = $this->ourmodel->download_crawl_result($where1,$where2,$where3,$where4,$where5);

  $users = json_decode(json_encode($users), true);

  // read data to active sheet
  $doc->getActiveSheet()->fromArray($users, null, 'A1');

  $filename='just_some_random_name.xls'; //save our workbook as this file name

  header('Content-Type: application/vnd.ms-excel'); //mime type

  header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

  header('Cache-Control: max-age=0'); //no cache

  $objWriter = PHPExcel_IOFactory::createWriter($doc, 'Excel5');

  //force user to download the Excel file without writing it to server's HD
  $objWriter->save('php://output');

}

public function scrapexport()
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
  $this->load->view('scrapexport',$data);
}

public function scrapexportaction()
{
  if ($this->session->userdata('locked')) {
      $this->session->unset_userdata('locked');
  }

  if ($_POST['keyword']!=''){
    $where1=" AND name like '%".$_POST['keyword']."%'" ;
  } else {$where1='';}

  if ($_POST['host']!='0'){
    $where2=" AND host_id =".$_POST['host'];
  } else {$where2='';}

  $doc = new PHPExcel();
  //activate worksheet number 1
  $doc->setActiveSheetIndex(0);
  //name the worksheet
  $doc->getActiveSheet()->setTitle('Users list');


  // get all users in array formate
  $users = $this->ourmodel->download_scrap_result($where1,$where2);

  $users = json_decode(json_encode($users), true);

  // read data to active sheet
  $doc->getActiveSheet()->fromArray($users, null, 'A1');

  $filename='just_some_random_name.xls'; //save our workbook as this file name

  header('Content-Type: application/vnd.ms-excel'); //mime type

  header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

  header('Cache-Control: max-age=0'); //no cache

  $objWriter = PHPExcel_IOFactory::createWriter($doc, 'Excel5');

  //force user to download the Excel file without writing it to server's HD
  $objWriter->save('php://output');
}


}
