<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_gambar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('gambar_model');
        $this->load->helper('url');
    }

    public function index(){
    	$this->load->view('relawan/header');
    	$this->load->view('relawan/gambar_bencana');
    }

    public function get_gambar(){
    	$data = $this->gambar_model->getAllImage();
		$this->load->view('relawan/header');
    	$this->load->view('relawan/gambar_bencana', array('data' => $data));
    }

    public function do_addimage(){
        // $deskripsi_gambar = $_POST['deskripsi_gambar'];
        // $tanggal_gambar = date("y-m-d");
        $path = "././assets/img/bencana/";
        
        $config['upload_path']          = '$path';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);



        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

               $this->load->view('relawan/gambar_bencana', $error);

                
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

        }

   //      $data_insert =  array(
			// 'deskripsi_gambar' => $deskripsi_gambar,
			// 'tanggal_gambar' => $tanggal_gambar,

			// );

	//	$res = $this->gambar_model->addDataImage($data_insert);


    }
    

}