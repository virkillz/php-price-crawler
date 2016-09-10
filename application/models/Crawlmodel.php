<?php
Class Crawlmodel extends CI_Model
{

 function HostNotYetCrawl()
 {
   $this->db->select('starter_url,id,prod_regex,cat_regex,blacklist_regex');
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

function getUpdateTarget($hostid,$limit) {
  $this->db->where('host_id',$hostid);
  $this->db->where('category','');
  $this->db->limit($limit);
  $query = $this ->db->get('crawl_result');
  return $query->result();
  //return $this->db->last_query();
}

function LinkNotYetCrawl($hostid)
{
  $this->db->select('*');
  $this->db->join('host a', 'host_id=a.id', 'left');
  $this->db->where('url_list.is_crawled',0);
  $this->db->where('url_list.keyword','');
  $this->db->where('host_id',$hostid);
  $this->db->order_by('is_category', 'DESC');
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

 function RandomUpdateHost()
 {
   $this->db->select('id');
   $this->db->where('category_xpath !=','');
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
    //$this->db->insert('url_list', $data);

    $insert_query = $this->db->insert_string('url_list', $data);
    $insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
    $this->db->query($insert_query);
    return TRUE;
  } else {
    return FALSE;
  }

 }

 function insert_link_from_search($url, $data){

  $sql="SELECT id FROM url_list WHERE url = '$url' LIMIT 1";
  $query = $this->db->query($sql);

  if($query -> num_rows() == 0)
  {
    $insert_query = $this->db->insert_string('url_list', $data);
    $insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
    $this->db->query($insert_query);
    return $this->db->insert_id();
  } else {
    $hasil = $query->result();
    return $hasil[0]->id;
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

function updateResult($id,$data){
$this -> db -> where('id', $id);
$this -> db -> update('crawl_result', $data);
}

function insertCrawl($data) {
  $this->db->insert('crawl_result',$data);
}

function insert_keyword($data) {
  //$this->db->insert('keyword',$data);
  $insert_query = $this->db->insert_string('keyword', $data);
  $insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
  $this->db->query($insert_query);
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

function summary_url_list()
{
  $sql="SELECT COUNT(url) as links, sum(if(maybe_product = 1,1,0)) as maybe_prod, sum(if(is_crawled = 1,1,0)) as is_crawled, sum(if(is_extracted = 1,1,0)) as is_extracted, sum(if(is_category = 1,1,0)) as is_category FROM url_list";
  $query=$this->db->query($sql);
  $hasil=$query->result();
  return $hasil;

}

function summary_keyword()
{
  $sql="SELECT keyword FROM `keyword` GROUP by keyword";
  $query=$this->db->query($sql);
  $hasil=$query->num_rows();
  return $hasil;
}


}

?>
