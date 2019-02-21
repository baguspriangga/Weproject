<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Login_model');
    
  }
 
  function index(){
    // $data_user = $this->Login_model->get_data();
    // echo "<pre>";
    // print_r($data_user);
    // exit();
   $this->load->view('user/user_login');
  }
 
  function auth(){
    $user_name    = $this->input->post('user_name',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->Login_model->validate($user_name,$password);
 	//echo '<pre>';
	// var_dump($validate);
    if($validate->num_rows() > 0){
        $data  	= $validate->row_array();
        $name  		= $data['name'];
        $user_name 	= $data['user_name'];
        $level 		= $data['user_level'];
        $user_id 	= $data['user_id'];
        $sesdata = array(
            'name'  		=> $name,
            'user_name'     => $user_name,
            'level'     	=> $level,
            'user_id'     	=> $user_id,
            'logged_in' 	=> TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
            redirect('page');
 
        // access login for staff
        }elseif($level === '2'){
            redirect('user');
 
        // access login for author
        }else{
            redirect('page/author');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
 
}