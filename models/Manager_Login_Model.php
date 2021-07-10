<?php
 class Manager_Login_Model extends CI_Model{
   function can_login($mngusername,$mngpassword){
     $this->db->where('username',$mngusername);
     $this->db->where('password',$mngpassword);
     $query=$this->db->get('manager');
     if($query->num_rows()>0){
       return true;
     }
     else{
       return false;
     }
   }
 }
?>
