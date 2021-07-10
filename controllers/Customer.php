<?php
class Customer extends CI_Controller{
  public function _construct(){
    parent::_construct();

    $this->load->database();
    $this->load->model('Cust_Model');
  }
  public function insert(){
    $this->load->view("l_customer_reg_form.html");

    if($this->input->post('save_cust')){
      $id=$this->input->post('cust_id');
      $name=$this->input->post('cust_name');
      $dob=$this->input->post('cust_dob');
      $gender=$this->input->post('cust_gender');
      $con_num=$this->input->post('cust_con_num');
      $email=$this->input->post('cust_email');
      $emp_id=$this->input->post('emp_id');
      $reg_date=$this->input->post('reg_date');
      $this->Cust_Model->save_cust_records($id,$name,$dob,$gender,$con_num,$email,$emp_id,$reg_date);
      $this->load->view('successReg');
      $this->load->view('backHome');
    }
  }

  public function retrieve(){
    $result['data']=$this->Cust_Model->display_cust();
    $this->load->view('cust_display',$result);
    $this->load->view('backHome');
  }

  public function delete(){
    $this->load->view("cust_delete.html");
    if ($this->input->post('delete')) {
      $id=$this->input->post('id');
      $this->Cust_Model->delete_cust($id);
      $this->load->view('deleteSuccess');
      $this->load->view('backHome2');

    }
  }

    public function update(){
      $this->load->view("cust_update.html");
      if ($this->input->post('update')) {
        $field=$this->input->post('field');
        $id=$this->input->post('id');
        $change=$this->input->post('data');
        $this->Cust_Model->update_customer($field,$id,$change);
        $this->load->view('updateSuccess');
        $this->load->view('backHome');
    }

  }
}
?>
