<?php 
/**
* 
*/
class User_profil extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url_helper');
	    if($this->session->userdata('logged_in') != TRUE) :
			redirect('login');
		endif;
	}

	public function index()
	{
		$data['get_user_profil'] = $this->User_model->get_user_profil();
		$this->template->load('user_profil/border_usprofil', 'user_profil/get_usprofil',$data);
		
		// echo '<pre>';
		// print_r($data);
		// exit();
	}


	public function update_user_profil($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('des','des','required');
		//$this->form_validation->set_rules('foto','foto','required');


		if ($this->form_validation->run() === FALSE) {
			$data['update_user_profil'] = $this->User_model->get_user_profil_id($id);
			$this->template->load('user_profil/border_usprofil', 'user_profil/update_usprofil',$data);
		}else{
			$this->User_model->update_user_profil($id);
			redirect('user_profil');
		}
	}

	
}

 ?>