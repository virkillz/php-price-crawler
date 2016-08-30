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

 function get_host()
 {
   $query = $this -> db -> get('host');
   return $query->result();
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

}

?>
