<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_log extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('log_model');
		//$this->load->helper('url');
	}

	public function index(){
		$this->load->model('barang_model');
		$data['barang'] = $this->barang_model->getAllBarang();
		$data['log'] = $this->log_model->getLog();
		$this->load->view('relawan/header');
		$this->load->view('relawan/log', $data);
	}

	public function insert(){

		$id_barang = $_POST['id'];
		$jumlah = $_POST['jumlah'];
		$harga = $_POST['harga'];

		$data_insert =  array(
			'jumlah' => $jumlah,
			'id_barang' => $id_barang,
			'harga' => $harga,
			);

		$result = $this->log_model->insertLog($data_insert);
		$this->db->query('UPDATE total_dana SET total_dana = (SELECT SUM(nominal) FROM dana)-(SELECT SUM(harga) FROM relawan_bencana.log)');
		$this->db->query('UPDATE kebutuhan SET jumlah_terpenuhi = (SELECT SUM(jumlah) FROM LOG WHERE id_barang=kebutuhan.`id_barang`)');
		redirect('index.php/relawan/log');
	}
}


?>