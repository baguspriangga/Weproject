<?php
	/**
	* 
	*/
	class Upload_model extends CI_model
	{
		public function __construct(){
			$this->load->database();
		}

		public function get_gambar($userid){
			$this->db->select('tb_gambar.id, tb_gambar.nama_file,tb_gambar.ukuran_file,tb_gambar.tipe_file,tbl_users.user_id');
			$this->db->join('tbl_users', 'tb_gambar.user_id = tbl_users.user_id');
			$this->db->where('tb_gambar.user_id',$userid);
			$query = $this->db->get('tb_gambar');
			return $query->result_array();
		}

		public function add_gambar($data_file){
			// $data = array(
			// 'nama_file' => $this->input->post(['upload_data']['file_name']),
		 //    'ukuran_file' => $this->input->post(['upload_data']['file_size']),
		 //    'tipe_file' => $this->input->post(['upload_data']['file_type'])
		 //       );
			return $this->db->insert('tb_gambar',$data_file);
		}

		public function get_gambar_id($id=FAlSE){
			$query = $this->db->get_where('tb_gambar', array('id' => $id, ));
			return $query->row_array();
		}

		public function update_gambar($id,$data_file){
			$this->db->where('id',$id);
			return $this->db->update('tb_gambar',$data_file);
		}

		
	
	}


