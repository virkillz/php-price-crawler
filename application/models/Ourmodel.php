<?php
Class Ourmodel extends CI_Model
{

 function insert_host($data)
 {
   if ($this->db->insert('host', $data)) {
     return $this->db->insert_id();
   } else {
     return false;
   }
 }

function getScrapResult()
{
  $query = $this -> db -> get('crawl_result');
  return $query->result();
}

function getTotalHost()
{
  return $this->db->count_all('host');
}

function getTotalLink()
{
  return $this->db->count_all('url_list');
}

function getTotalProd()
{
  return $this->db->count_all('crawl_result');
}

function getTotalPotentialProd()
{
  $this-> db -> where('maybe_product',1);
  $query = $this -> db -> get('url_list');
  return $query->num_rows();
}

function count_all_potential($hostid)
{
  $this-> db -> where('maybe_product',1);
  $this-> db -> where('host_id',$hostid);
  $query = $this -> db -> get('url_list');
  return $query->num_rows();
}

public function fetch_all_link($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("url_list");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

function getAllLink()
{
  $query = $this -> db -> get('url_list');
  return $query->result();
}

function count_all_link($hostid)
{
  $this-> db -> where('host_id',$hostid);
  $query = $this -> db -> get('url_list');
  return $query->num_rows();
}

function count_all_product($hostid)
{
  $this-> db -> where('host_id',$hostid);
  $query = $this -> db -> get('crawl_result');
  return $query->num_rows();
}


 function get_host()
 {
   $query = $this -> db -> get('host');
   return $query->result();
 }

 function get_host_detail($id)
 {
   $this-> db -> where('id',$id);
   $query = $this -> db -> get('host');

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
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

 function update_host($id,$data){
 $this -> db -> where('id', $id);
 $this -> db -> update('host', $data);

 }

function update_profile_id($id,$data){
$this -> db -> where('username', $id);
$this -> db -> update('users', $data);
}

}

?>
