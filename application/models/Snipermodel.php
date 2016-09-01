<?php
Class Snipermodel extends CI_Model
{

  function Lazada_crawling_get_target()
  {

    $sql="SELECT * FROM `url_list` WHERE (`url` LIKE '%beli%') OR (`url` LIKE '%jual%') ORDER BY `is_extracted` DESC LIMIT 1";
    $query = $this->db->query($sql);

    if($query -> num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }

}




//===================================



 function HostNotYetCrawl()
 {
   $this->db->select('starter_url,id,prod_regex');
   $this->db->where('is_crawled',0);
   $this->db->limit(1);
   $query = $this ->db->get('host');
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function getHostDetail($id)
 {
   $this->db->select('host_name,name_xpath,price_xpath,prod_regex');
   $this->db->where('id',$id);
   $this->db->limit(1);
   $query = $this ->db->get('host');
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

function getExtractTarget($hostid,$limit) {
  $this->db->select('url_list.*,a.*,url_list.id as idx');
  $this->db->join('host a', 'host_id=a.id', 'left');
  $this->db->where('is_extracted',0);
  $this->db->where('host_id',$hostid);
  $this->db->order_by('maybe_product','DESC');
  $this->db->limit($limit);
  $query = $this ->db->get('url_list');

  return $query->result();

}

function LinkNotYetCrawl($hostid)
{
  $this->db->select('*');
  $this->db->join('host a', 'host_id=a.id', 'left');
  $this->db->where('url_list.is_crawled',0);
  $this->db->where('host_id',$hostid);
  $this->db->order_by('url', 'RANDOM');
  $this->db->limit(1);
  $query = $this ->db->get('url_list');
  if($query -> num_rows() == 1)
  {
    return $query->result();
  }
  else
  {
    return false;
  }
}

function tag_is_extracted($id) {

  $sql = "UPDATE `url_list` SET is_extracted=1 WHERE id='$id'";
  $this->db->query($sql);
}

 function RandomHost()
 {
   $this->db->select('id');
   $this->db->order_by('host_name','RANDOM');
   $this->db->limit(1);
   $query = $this ->db->get('host');
   if($query -> num_rows() == 1)
   {
     $result = $query->result();
     return $result[0]->id;
   }
   else
   {
     return false;
   }
 }


 function get_host()
 {
   $query = $this -> db -> get('host');
   return $query->result();
 }

 function insertLink($url, $data){

  $sql="SELECT id FROM url_list WHERE url = '$url'";
  $query = $this->db->query($sql);

  if($query -> num_rows() == 0)
  {
    $this->db->insert('url_list', $data);
    return TRUE;
  } else {
    return FALSE;
  }

 }

 function HostTagCrawl($id){
   $sql = "
   UPDATE `host` SET `is_crawled`=1 WHERE id='$id';
   ";
        $query = $this->db->query($sql);
 }

 function LinkTagCrawl($url){
   $sql = "
   UPDATE `url_list` SET `is_crawled`=1 WHERE url='$url';
   ";
        $query = $this->db->query($sql);
 }


 function getProfile($username)
 {
   $this -> db -> where('username', $username);
   $this -> db -> limit(1);
   $query = $this -> db -> get('users');

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }


function update_profile_id($id,$data){
$this -> db -> where('username', $id);
$this -> db -> update('users', $data);
}


function insertCrawl($data) {
  $this->db->insert('crawl_result',$data);
}


function getZeroMaybe($hostid){
  $this -> db -> where('host_id', $hostid);
  $this -> db -> where('maybe_product', 0);
  $query = $this ->db->get('url_list');
  return $query->result();
}

function updateMaybeProduct($url,$data){
$this -> db -> where('url', $url);
$this -> db -> update('url_list', $data);
}



}

?>
