<?php 
/**
* 
*/
class User_kontak extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kontak_model');
		$this->load->helper('url_helper');
		
	    if($this->session->userdata('logged_in') != TRUE) :
			redirect('login');
		endif;
	}

	public function index()
	{
		$userid = $this->session->userdata('userid');
		$data['get_user_kontak'] = $this->Kontak_model->get_user_kontak($userid);
		$this->template->load('user_kontak/border_kontak', 'user_kontak/get_kontak',$data);
		
		// echo '<pre>';
		// print_r($data);
		// exit();
	}


	public function update_user_kontak($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('no_tlp','no_tlp','trim');
		$this->form_validation->set_rules('no_hp','no_hp','trim');
		$this->form_validation->set_rules('email','email','trim');
		$this->form_validation->set_rules('facebook','facebook','trim');
		$this->form_validation->set_rules('instagram','instagram','trim');
		$this->form_validation->set_rules('youtube','youtube','trim');
		$this->form_validation->set_rules('blog','blog','trim');


		if ($this->form_validation->run() === FALSE) {
			$data['update_user_kontak'] = $this->Kontak_model->get_user_kontak_id($id);
			$this->template->load('user_kontak/border_kontak', 'user_kontak/update_kontak',$data);
		}else{
			$this->Kontak_model->update_user_kontak($id);
			redirect('user_kontak');
		}
	}

	
}

 ?>