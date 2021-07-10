<?php
class Med_Model extends CI_Model{
  public function save_med_records($med_id,$med_name,$med_des,$unit_price,$quantity,$purchased_date,$exp_date,$emp_id){
    $query="INSERT INTO medicine VALUES ('$med_id','$med_name','$med_des','$unit_price','$quantity','$purchased_date','$exp_date','$emp_id');";
    $this->db->query($query);
  }
  public function display_med(){
    $query=$this->db->query("SELECT * FROM medicine;");
    return $query->result();
  }
  public function delete_med($med_id){
    $this->db->query("DELETE FROM medicine WHERE med_id='$med_id';");
  }

  public function update_med($option,$id,$data){
    $query=$this->db->query("UPDATE medicine SET $option='$data' WHERE med_id='$id';");
  }
}
?>
