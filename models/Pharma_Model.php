<?php
class Pharma_Model extends CI_Model{
  public function save_pharma_records($emp_id,$nic,$first_name,$middle_name,$last_name,$gender,$dob,$status,$con_num,$address,$email,$c_id,$salary,$username,$password,$reg_date,$manager_id){
    $query="INSERT INTO pharmacist VALUES ('$emp_id','$nic','$first_name','$middle_name','$last_name','$gender','$dob','$status','$con_num','$address','$email','$c_id','$salary','$username','$password','$reg_date','$manager_id');";
    $this->db->query($query);
  }
  public function display_pharma(){
    $query=$this->db->query("SELECT * FROM pharmacist;");
    return $query->result();
  }
  public function delete_pharma($emp_id){
    $this->db->query("DELETE FROM pharmacist WHERE emp_id='$emp_id';");
  }
  public function update_pharma($option,$id,$data){
    $query=$this->db->query("UPDATE pharmacist SET $option='$data' WHERE emp_id='$id';");
  }
}
?>
