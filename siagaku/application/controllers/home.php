<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('dana_model');
		$data['dana'] = $this->dana_model->getLastDana();
		
		$this->load->model('donasi_model');
		$data['donasi'] = $this->donasi_model->getLastDonasi();
		
		$this->load->model('kebutuhan_model');
		$data['kebutuhan'] = $this->kebutuhan_model->getLastKebutuhan();
		
		$this->load->model('lokasi_model');
		$data['location'] = $this->lokasi_model->getAllLocation();
		
		$this->load->model('gambar_model');
		$data['gambar'] = $this->gambar_model->getLastImage();
		
		$this->load->view('index',$data);
	}
	
	public function detail_kebutuhan($id)
	{
		$this->load->model('lokasi_model');
		$data['lokasi'] = $this->lokasi_model->getLocationById($id);
		
		$this->load->model('kebutuhan_model');
		$data['kebutuhan'] = $this->kebutuhan_model->getKebutuhanByLocation($id);
		
		$this->load->view('detail_kebutuhan',$data);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function relawan()
	{
		$this->load->view('relawan/index');
	}
}
