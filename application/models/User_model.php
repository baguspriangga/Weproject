<?php
	/**
	* 
	*/
	class User_model extends CI_model
	{
		public function __construct(){
			$this->load->database();
		}

		public function get_user_profil($userid){
			// $this->db->select('tb_profil.id_profil, tb_user.nama_user, tb_kategori.kategori, tb_kota.kota, tb_profil.nama, tb_profil.alamat, tb_profil.foto, tb_profil.des,tb_gambar.nama_file');
			// $this->db->from('tb_profil');
			// $this->db->join('tb_user', 'tb_profil.id_user = tb_user.id_user');
			// $this->db->join('tb_kategori', 'tb_profil.id_kategori = tb_kategori.id_kategori');
			// $this->db->join('tb_kota', 'tb_profil.id_kota = tb_kota.id_kota');
			// $this->db->join('tb_gambar', 'tb_gambar.id_profil = tb_profil.id_profil');
			// $this->db->where('tb_profil.id_profil','1');
			//$fields 	= "tb_profil.id_profil, tb_profil.nama,tb_profil.alamat,tb_profil.des,tb_gambar.nama_file";
			$this->db->select('tb_profil.id_profil, tb_profil.nama,tb_profil.alamat,tb_profil.des,tbl_users.user_id');
			$this->db->join('tbl_users', 'tb_profil.user_id = tbl_users.user_id');
			$this->db->where('tb_profil.user_id',$userid);
			$query = $this->db->get('tb_profil');
			return $query->result_array();
		}

		public function get_user_profil_id($id=FAlSE){
			$query = $this->db->get_where('tb_profil', array('id_profil' => $id, ));
			return $query->row_array();
		}

		public function update_user_profil($id){
			$data = array ('nama' =>$this->input->post('nama') ,
							'alamat' =>$this->input->post('alamat'),
							'des' 	=>$this->input->post('des'),
							// 'foto' =>$this->input->post('foto')
						);
			$this->db->where('id_profil',$id);
			return $this->db->update('tb_profil',$data);
		}

		
	
	}


