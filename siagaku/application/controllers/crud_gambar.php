<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_gambar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('dana_model');
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
        $deskripsi_gambar = $_POST['deskripsi_gambar'];
        $tanggal = date("y-m-d");
        
        $config['upload_path']          = './assets/img/bencana';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

                // $this->load->view('upload_form', $error);
                echo $error;
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

        }

        $data_insert =  array(
			'deskripsi_gambar' => $deskripsi_gambar,
			'tanggal_gambar' => $tanggal_gambar,

			);

		$res = $this->gambar_model->addDataImage($data_insert);


    }
    

}