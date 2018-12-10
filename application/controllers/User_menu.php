<?php 
/**
* 
*/
class User_menu extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model');
		
	}

	public function index()
	{
		$this->load->view('user_menu/index');

	}


	public function login()
	{
		$this->load->view('user_menu/login');

	}

	public function get_kategori(){
		$data['get_kategori'] = $this->Menu_model->get_kategori();
		//$this->load->view('user_menu/daftar',$data);
		echo '<pre>';
		print_r($data);
		exit();
	}

	public function daftar()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama Vendor','required');
		$this->form_validation->set_rules('user_name','Username','required');
		$this->form_validation->set_rules('no_tlp','No Telepon','required');
		$this->form_validation->set_rules('user_email','E-mail','required');
		$this->form_validation->set_rules('user_password','Password','required');
		$data['get_kategori'] = $this->Menu_model->get_kategori();
		// echo '<pre>';
		// print_r($data);
		// exit();
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('user_menu/daftar',$data);
		}else{
			// echo '<pre>';
			// var_dump($this->input->post());
			//$this->Crud_model->add_kategori();
			//redirect('user_menu');
			$data_user = array(
		      'user_name' 		=> $this->input->post('user_name'),
		      'user_email'  	=> $this->input->post('user_email'),
		      'user_password'   => md5($this->input->post('user_password')),
		    ); 

			$data_profil = array(
		      'nama'    => $this->input->post('nama')
		    );

		    $data_kontak = array(
		      'no_tlp'    => $this->input->post('no_tlp')
		    );

		    $this->Menu_model->insert_entry($data_user,$data_profil,$data_kontak);
		    redirect('user_menu');

		 // 	echo '<pre>';
		 // 	print_r($data_user);
			// print_r($data_profil);
			// print_r($data_kontak);
			
			exit();   

			}

		

	}

	public function profil()
	{
		$this->load->view('user_menu/profil');

	}


	
}

 ?>