<?php
	/**
	* 
	*/
	class Harga_model extends CI_model
	{
		public function __construct(){
			$this->load->database();
		}

		public function get_user_harga(){
			$this->db->where('tb_harga.id_harga','1');
			$query = $this->db->get('tb_harga');
			return $query->result_array();
		}

		public function get_user_harga_id($id=FAlSE){
			$query = $this->db->get_where('tb_harga', array('id_harga' => $id, ));
			return $query->row_array();
		}

		public function update_user_harga($id){
			$data = array ('harga' =>$this->input->post('harga') ,
						);
			$this->db->where('id_harga',$id);
			return $this->db->update('tb_harga',$data);
		}

		
	
	}


