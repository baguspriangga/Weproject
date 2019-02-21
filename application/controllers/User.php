<?php 
	
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') != TRUE) :
			redirect('login');
		endif;
   
  }
	
	public function index(){

		$text_cari	= $this->input->get('text_cari');
		$config['base_url']		= base_url().'user?text_cari='.$text_cari;
		$config['page_query_string'] = True;
		$data['text_cari'] = $text_cari;
		$data['data_nik'] = $this->data_nik($text_cari);

		$data['content'] = 'user/user_home';
  		$this->load->view('template/temp',$data);
  		// echo("<pre>");
  		// print_r($data);
  		// exit();
	}

	public function cetak(){


		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jk = $this->input->post('jk');
		$goldar = $this->input->post('goldar');
		$alamat = $this->input->post('alamat');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status');
		$pekerjaan = $this->input->post('pekerjaan');
		$kewarganegaraan = $this->input->post('kewarganegaraan');
		$masa_berlaku = $this->input->post('masa_berlaku');
		$nama_ibu = $this->input->post('nama_ibu');
		$foto = $this->input->post('foto');
		$ttd = $this->input->post('ttd');
		$sidik_jari = $this->input->post('sidik_jari');
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jk' => $jk,
			'goldar' => $goldar,
			'alamat' => $alamat,
			'agama' => $agama,
			'status' => $status,
			'pekerjaan' => $pekerjaan,
			'kewarganegaraan' => $kewarganegaraan,
			'masa_berlaku' => $masa_berlaku,
			'nama_ibu' => $nama_ibu,
			'foto' => "aaa",
			'ttd' => "bbbb",
			'sidik_jari' => "cccc"
			);

		$this->load->view('user/user_cetak',$data);
		// echo '<pre>';
		// var_dump($_POST);
		// exit();
	}

	public function data_nik($text_cari)
	 	{
	 		$fields 	= "tb_user.id_data,tb_user.nik,tb_user.nama,tb_user.tempat_lahir, tb_user.tanggal_lahir, tb_user.jk,tb_user.goldar, tb_user.alamat, tb_user.agama, tb_user.status, tb_user.pekerjaan, tb_user.kewarganegaraan, tb_user.masa_berlaku, tb_user.nama_ibu, tb_user.foto, tb_user.ttd, tb_user.sidik_jari";
	 		$where 		= array('');
	 		$order_by	='tb_user.nik';
	 		$table		= 'tb_user';
	 		$like 		= 'tb_user.nik';
	 		$data_nik = $this->Crud_model->tampil_data($where,$fields,$order_by,$table,$like,$text_cari);
			return $data_nik;
	 	}

	public function jumlah_data($text_cari){
		$fields 	= "tb_data.nik";
 		$where 		= array('');
 		$order_by	='tb_data.nik';
 		$table		= 'tb_data';
 		$this->db->like('tb_data.nik',$text_cari);
 		$jumlah_data = $this->User_model->jumlah_data($where,$fields,$order_by,$table);
		return $jumlah_data;

		echo("<pre>");
		print_r($jumlah_data);
		exit();

	}
}
 ?>
