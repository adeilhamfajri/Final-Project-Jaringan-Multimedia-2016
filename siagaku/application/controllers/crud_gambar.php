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

}