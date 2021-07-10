<?php
class Medicine extends CI_Controller{
  public function _construct(){
    parent::_construct();

    $this->load->database();
    $this->load->model('Med_Model');
    $this->load->helper('url','form');
    $this->load->library('form_validation');
  }
  public function insert(){
    $this->load->view("med_reg_form");

    if($this->input->post('submit')){
      $id=$this->input->post('med_id');
      $name=$this->input->post('med_name');
      $description=$this->input->post('med_des');
      $unit_price=$this->input->post('unit_price');
      $quantity=$this->input->post('quantity');
      $purchased_date=$this->input->post('purchased_date');
      $exp_date=$this->input->post('exp_date');
      $config['upload_path']='../upload/';
      $config['allowed_types']='gif|jpg|png';
      $config['max_size']=2000;
      $config['max_width']=1500;
      $config['max_height']=1500;

      $this->load->library('upload',$config);

    if(!$this->upload->do_upload('medicine_pic')){
      $error=array('error'=>$this->upload->display_errors());
      }
      $emp_id=$this->input->post('emp_id');
      $this->Med_Model->save_med_records($id,$name,$description,$unit_price,$quantity,$purchased_date,$exp_date,$emp_id);
      $this->load->view('successReg');
      $this->load->view('backHome');

    }
  }

  public function retrieve(){
    $result['data']=$this->Med_Model->display_med();
    $this->load->view('med_display',$result);
    $this->load->view('backHome');
  }

  public function delete(){
   $this->load->view("med_delete.html");
    if ($this->input->post('delete')) {
      $id=$this->input->post('id');
      $this->Med_Model->delete_med($id);
      $this->load->view('deleteSuccess');
      $this->load->view('backHome');
    }
  }

    public function update(){
      $this->load->view("med_update.html");
      if ($this->input->post('update')) {
        $field=$this->input->post('field');
        $id=$this->input->post('id');
        $change=$this->input->post('data');
        $this->Med_Model->update_med($field,$id,$change);
        $this->load->view('updateSuccess');
        $this->load->view('backHome');
    }

  }
}
?>
