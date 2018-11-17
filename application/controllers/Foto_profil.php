<?php

class Foto_profil extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Upload_model');
        }

        public function index()
        {
            $data['error'] = '';
            $data['get_gambar'] = $this->Upload_model->get_gambar();
            $this->template->load('foto_profil/border_fotprofil', 'foto_profil/get_fotprofil',$data);

            // $data['error'] = '';
            // $data['get_gambar'] = $this->Upload_model->get_gambar();
            // $this->load->view('upload_form',$data);
            // echo '<pre>';
            //              print_r($data);
                         
               
        }

        public function do_upload_update($id){
            //$data['error'] = '';
            // $data['update_gambar'] = $this->Upload_model->get_gambar_id($id);
            // $this->load->view('update_form',$data);
                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $data = array('error' => $this->upload->display_errors());
                        $data['update_gambar'] = $this->Upload_model->get_gambar_id($id);

                         $this->template->load('foto_profil/border_fotprofil', 'foto_profil/update_fotprofil',$data);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                         // echo '<pre>';
                         // print_r($data);
                         // exit();
 
                        $nama_file=$data['upload_data']['file_name'];
                        $ukuran_file=$data['upload_data']['file_size'];
                        $tipe_file=$data['upload_data']['file_type'];
                        $data_file=array('nama_file' => $nama_file,
                                         'ukuran_file' => $ukuran_file,
                                         'tipe_file' => $tipe_file );
                        $this->Upload_model->update_gambar($id,$data_file);

                        //$this->load->view('upload_success');
                        redirect('foto_profil');
                }
            // echo '<pre>';
            // print_r($data);
            // exit();
        }
}
?>