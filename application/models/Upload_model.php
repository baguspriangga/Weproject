<?php
	/**
	* 
	*/
	class Upload_model extends CI_model
	{
		public function __construct(){
			$this->load->database();
		}

		public function get_gambar(){
			$this->db->where('id','1');
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


