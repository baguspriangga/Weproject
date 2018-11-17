<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gambar_model extends CI_Model {
  // Fungsi untuk menampilkan semua data gambar
  public function view(){
    return $this->db->get('tb_gambar')->result();
  }
  
  // Fungsi untuk melakukan proses upload file
  public function upload(){
    $config['upload_path'] = './images/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']	= '1024';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
  
  // Fungsi untuk menyimpan data ke database
  public function save($upload){
    $data = array(
      'nama_file' => $upload['file']['file_name'],
      'ukuran_file' => $upload['file']['file_size'],
      'tipe_file' => $upload['file']['file_type']
    );
    
    $this->db->insert('tb_gambar', $data);
  }

  public function get_gambar_id($id=FAlSE){
      $query = $this->db->get_where('tb_gambar', array('id' => $id, ));
      return $query->row_array();
    }

  public function update_gambar($id,$upload){
    $data = array(
      'nama_file' => $upload['file']['file_name'],
      'ukuran_file' => $upload['file']['file_size'],
      'tipe_file' => $upload['file']['file_type']
    );
    $this->db->where('id',$id);
    $this->db->update('tb_gambar', $data);
  }
}