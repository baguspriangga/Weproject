<?php
	/**
	* 
	*/
	class Kontak_model extends CI_model
	{
		public function __construct(){
			$this->load->database();
		}

		public function get_user_kontak($userid){
			$this->db->select(
				'tb_kontak.id_kontak,
				tb_kontak.no_tlp,
				tb_kontak.no_hp,
				tb_kontak.email,
				tb_kontak.facebook,
				tb_kontak.instagram, 
				tb_kontak.youtube,
				tb_kontak.blog,
				tbl_users.user_id');
			$this->db->join('tbl_users', 'tb_kontak.user_id = tbl_users.user_id');
			$this->db->where('tb_kontak.user_id',$userid);
			$query = $this->db->get('tb_kontak');
			return $query->result_array();
		}

		public function get_user_kontak_id($id=FAlSE){
			$query = $this->db->get_where('tb_kontak', array('id_kontak' => $id, ));
			return $query->row_array();
		}

		public function update_user_kontak($id){
			$data = array ('no_tlp' =>$this->input->post('no_tlp') ,
							'no_hp' =>$this->input->post('no_hp'),
							'email' =>$this->input->post('email'),
							'facebook' =>$this->input->post('facebook'),
							'instagram' =>$this->input->post('instagram'),
							'youtube' =>$this->input->post('youtube'),
							'blog' =>$this->input->post('blog'),
						);
			$this->db->where('id_kontak',$id);
			return $this->db->update('tb_kontak',$data);
		}

		
	
	}


