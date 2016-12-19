<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_log extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('log_model');
		$this->load->helper('url');
	}

	public function index(){
		$data = $this->log_model->getLog();
		$this->load->view('relawan/header');
		$this->load->view('relawan/log', array('records'=>$data));
	}

	public function insert(){

		$id_barang = $_POST['id'];
		$jumlah = $_POST['jumlah'];
		$harga = $_POST['harga'];

		$data_insert =  array(
			'tanggal' => 'NOW()',
			'jumlah' => $jumlah,
			'id_barang' => $id_barang,
			'harga' => $harga,
			);

		$result = $this->log_model->insertLog($data_insert);
		redirect('index.php/relawan/log');
	}
}


?>