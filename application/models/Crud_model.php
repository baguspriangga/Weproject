<?php
	/**
	* 
	*/
	class Crud_model extends CI_model
	{
		public function __construct(){
			$this->load->database();
		}

		public function get_data(){
			$query = $this->db->get('tb_kategori');
			return $query->result_array();
		}

		public function add_kategori(){
			$data = array('kategori' =>$this->input->post('kategori') , );
			return $this->db->insert('tb_kategori',$data);
		}

		public function get_kategori_id($id=FAlSE){
			$query = $this->db->get_where('tb_kategori', array('id_kategori' => $id, ));
			return $query->row_array();
		}

		public function update_kategori($id){
			$data = array('kategori' =>$this->input->post('kategori') , );
			$this->db->where('id_kategori',$id);
			return $this->db->update('tb_kategori',$data);
		}

		
	
	}


