<?php
	/**
	* 
	*/
	class Menu_model extends CI_model
	{
		public function __construct(){
			$this->load->database();
		}

		public function get_kategori(){
			$query = $this->db->get('tb_kategori');
			return $query->result();
		}

		function insert_entry($data_user,$data_profil,$data_kontak) {
			$data_user['user_level'] = '2';
		    $this->db->insert('tbl_users', $data_user);
		    $insert_id = $this->db->insert_id($data_user);

		    $data_profil['user_id'] = $insert_id;
		    $this->db->insert('tb_profil', $data_profil);

		    $data_kontak['user_id'] = $insert_id;
		    $this->db->insert('tb_kontak', $data_kontak);

		    $data_gambar['user_id'] = $insert_id;
		    $this->db->insert('tb_gambar', $data_gambar);

		    $data_harga['user_id'] = $insert_id;
		    $this->db->insert('tb_harga', $data_harga);

		    //echo $this->db->last_query(); die;

		}

		// public function add_kategori(){
		// 	$data = array('kategori' =>$this->input->post('kategori') , );
		// 	return $this->db->insert('tb_kategori',$data);
		// }

		// public function get_kategori_id($id=FAlSE){
		// 	$query = $this->db->get_where('tb_kategori', array('id_kategori' => $id, ));
		// 	return $query->row_array();
		// }

		// public function update_kategori($id){
		// 	$data = array('kategori' =>$this->input->post('kategori') , );
		// 	$this->db->where('id_kategori',$id);
		// 	return $this->db->update('tb_kategori',$data);
		// }

		
	
	}


