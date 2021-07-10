<?php
class Cust_Model extends CI_Model{
  public function save_cust_records($cust_id,$name,$dob,$gender,$con_num,$email,$emp_id,$reg_date){
    $query="INSERT INTO loyalty_customer VALUES ('$cust_id','$name','$dob','$gender','$con_num','$email','$emp_id','$reg_date');";
    $this->db->query($query);
  }
  public function display_cust(){
    $query=$this->db->query("SELECT * FROM loyalty_customer;");
    return $query->result();
  }
  public function delete_cust($cust_id){
    $this->db->query("DELETE FROM loyalty_customer WHERE customer_id='$cust_id';");
  }
  public function update_customer($option,$id,$data){
    $query=$this->db->query("UPDATE loyalty_customer SET $option='$data' WHERE customer_id='$id';");
  }
}
?>
