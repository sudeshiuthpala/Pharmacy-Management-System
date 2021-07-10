<?php
class Pharmacist extends CI_Controller{
  public function _construct(){
    parent::_construct();

    $this->load->database();
    $this->load->model('Pharma_Model');
    $this->load->helper('url','form',array('form'));
    $this->load->library('form_validation',array('form_validation'));
  }
  public function insert(){
    $this->load->view("pharmacist_reg_form");

    if($this->input->post('submit')){
      $id=$this->input->post('emp_id');
      $nic=$this->input->post('nic');
      $fname=$this->input->post('fname');
      $mname=$this->input->post('mname');
      $lname=$this->input->post('lname');
      $gender=$this->input->post('gender');
      $dob=$this->input->post('dob');
      $status=$this->input->post('status');
      $con_num=$this->input->post('con_num');
      $address=$this->input->post('address');
      $email=$this->input->post('email');
      $cid=$this->input->post('cid');
      $salary=$this->input->post('salary');
      $username=$this->input->post('username');
      $password=$this->input->post('password');
      $reg_date=$this->input->post('reg_date');
      $manager_id=$this->input->post('manager_id');

      //$cpassword=$this->input->post('cpassword')
      $config['upload_path']='../upload/';
      $config['allowed_types']='gif|jpg|png';
      $config['max_size']=2000;
      $config['max_width']=1500;
      $config['max_height']=1500;
      $this->load->library('upload',$config);
    if(!$this->upload->do_upload('pharma_pic')){
      $error=array('error'=>$this->upload->display_errors());
    }
      $this->form_validation->set_rules('username','User_Name','required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('cPassword', 'Password Confirmation', 'required|matches[password]');
      if($this->form_validation->run()==FALSE){
        $this->load->view('pharmacist_reg_form');
      }
      else{
        $this->Pharma_Model->save_pharma_records($id,$nic,$fname,$mname,$lname,$gender,$dob,$status,$con_num,$address,$email,$cid,$salary,$username,$password,$reg_date,$manager_id);
        $this->load->view('successReg');
        $this->load->view('backHome2');
      }
    }
  }

  public function retrieve(){
    $result['data']=$this->Pharma_Model->display_pharma();
    $this->load->view('display_pharmacist',$result);
    $this->load->view('backHome2');
  }

  public function delete(){
    $this->load->view("pharma_delete.html");
    if ($this->input->post('delete')) {
      $id=$this->input->post('id');
      $this->Med_Model->delete_pharma($id);
      $this->load->view('deleteSuccess');
      $this->load->view('backHome2');
    }
  }

    public function update(){
      $this->load->view("pharma_update.html");
      if ($this->input->post('update')) {
        $field=$this->input->post('field');
        $id=$this->input->post('id');
        $change=$this->input->post('data');
        $this->Pharma_Model->update_pharma($field,$id,$change);
        $this->load->view('updateSuccess');
        $this->load->view('backHome2');
    }

  }
}
?>
