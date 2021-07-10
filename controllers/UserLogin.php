<?php
class UserLogin extends CI_Controller{
  public function _construct(){
    parent::_construct();
    $this->load->helper(array('form','url'));
  }
  function login(){
    $this->load->view('login');
  }
  function verify(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username','User_Name','required');
    $this->form_validation->set_rules('password','Password','required');
    if($this->form_validation->run()){
      $username=$this->input->post('username');
      $password=$this->input->post('password');
      $this->load->model('Login_Model');
      if($this->Login_Model->can_login($username,$password))
      {
        $session_data=array(
          'username' => $username,
          //'logged_in'=>TRUE
        );
        $this->session->set_userdata($session_data);
        redirect(base_url().'index.php/UserLogin/enter');
      }
      else {
        $this->session->set_flashdata('error','Invalid Username and Password');
        redirect(base_url().'index.php/UserLogin/login');
      }
    }
    else{
         $this->load->view('login');
    }
  }
  function enter(){
    if($this->session->userdata('username')!=''){

      redirect(base_url().'index.php/Main_pharma/click');
    //  echo '<h2>welcome'.$this->session->userdata('username')."/<h2>";
     //echo "<a href="'.base_url().'Login/logout">LogOut</a>";    }
   }
    else {
      redirect(base_url().'index.php/UserLogin/login');
    }
  }
  function logout(){
    $this->session->unset_userdata('username');
    redirect(base_url().'index.php/UserLogin/login');
  }
  function manageverify(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('managerusername','Manager_User_Name','required');
    $this->form_validation->set_rules('mngpassword','Password','required');
    if($this->form_validation->run()==FALSE){
      $this->load->view('login');
    }
    else{
      $mngusername=$this->input->post('managerusername');
      $mngpassword=$this->input->post('mngpassword');
      $this->load->model('Manager_Login_Model');
      if($this->Manager_Login_Model->can_login($mngusername,$mngpassword))
      {
        $session_data=array(
          'managerusername' => $mngusername,
          //'logged_in'=>TRUE
        );
        $this->session->set_userdata($session_data);
        redirect(base_url().'index.php/UserLogin/manager_enter');
      }
      else {
        $this->session->set_flashdata('error','Invalid Username and Password');
        redirect(base_url().'index.php/UserLogin/login');
      }
    }
  }
  function manager_enter(){
    if($this->session->userdata('username')!=''){
      redirect(base_url().'index.php/Manager/click');
    //  echo '<h2>welcome'.$this->session->userdata('username')."/<h2>";
    // echo "<a href="'.base_url().'Login/logout">LogOut</a>";
   }
    else {
      redirect(base_url().'index.php/UserLogin/login');
    }
  }
}
?>
