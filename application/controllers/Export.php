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

}
