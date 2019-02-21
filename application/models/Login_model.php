<?php
class Login_model extends CI_Model{
 
  function validate($user_name,$password){
    $this->db->where('user_name',$user_name);
    $this->db->where('user_password',$password);
    $result = $this->db->get('tb_user',1);
    return $result;
  }

  public function get_data(){
			$query = $this->db->get('tb_user');
			return $query->result_array();
		}
  
 }
