<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> where('username', $username);
   $this -> db -> where('password', md5($password));
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
