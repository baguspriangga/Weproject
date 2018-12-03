<?php 
/**
* 
*/
class User_harga extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Harga_model');
		$this->load->helper('url_helper');
	    if($this->session->userdata('logged_in') != TRUE) :
			redirect('login');
		endif;
	}

	public function index()
	{
		$data['get_user_harga'] = $this->Harga_model->get_user_harga();
		$this->template->load('user_harga/border_harga', 'user_harga/get_harga',$data);
		
		// echo '<pre>';
		// print_r($data);
		// exit();
	}



	public function update_user_harga($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('harga','harga','trim');
		if ($this->form_validation->run() === FALSE) {
			$data['update_user_harga'] = $this->Harga_model->get_user_harga_id($id);
			$this->template->load('user_harga/border_harga', 'user_harga/update_harga',$data);
			// echo '<pre>';
		// print_r($data);
		// exit();
		}else{
			$this->Harga_model->update_user_harga($id);
			redirect('user_harga');
		}
	}

	
}

 ?>