<?php
	/**
	* 
	*/
	class User_model extends CI_model
	{
		
		public function tampil_data($where,$fields,$order_by,$table,$like,$text_cari)
		{
			$this->db->select($fields);
			$this->db->where($where);
			$this->db->like($like,$text_cari);
			$this->db->order_by($order_by);
			$result = $this->db->get($table);
			return $result->result();
		}

		public function jumlah_data($where,$fields,$order_by,$table)
		{
			$this->db->select($fields);
			$this->db->where($where);
			$this->db->order_by($order_by);
			$result = $this->db->get($table);
			return $result->num_rows();
		}

		public function tampil_all($where,$fields,$order_by,$table)
		{
			$this->db->select($fields);
			$this->db->where($where);
			$this->db->order_by($order_by);
			$result = $this->db->get($table);
			return $result->result();
		}

		public function save_data($table_name,$data_input)
		{
			$this->db->insert($table_name,$data_input);
			return $this->db->insert_id();
		}

		public function update_data($data_update, $where, $table_name)
		{
			$this->db->where($where);
			$this->db->update($table_name,$data_update);
		}
	
	}


