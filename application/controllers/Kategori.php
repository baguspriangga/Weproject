<?php 
/**
* 
*/
class Kategori extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Crud_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['get_kategori'] = $this->Crud_model->get_data();
		$this->template->load('kategori/border_kategori','kategori/get_kategori',$data);
		
		// echo '<pre>';
		// print_r($this->tampil_kategori());
	}

	public function add_kategori()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kategori','kategori','required');

		if ($this->form_validation->run() === FALSE) {
			$this->template->load('kategori/border_kategori','kategori/add_kategori');
		}else{
			$this->Crud_model->add_kategori();
			redirect('kategori');
		}

	}

	public function update_kategori($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kategori','kategori','required');

		if ($this->form_validation->run() === FALSE) {
			$data['update_kategori'] = $this->Crud_model->get_kategori_id($id);
			$this->template->load('kategori/border_kategori','kategori/update_kategori',$data);
		}else{
			$this->Crud_model->update_kategori($id);
			redirect('kategori');
		}
	}

}

 ?>