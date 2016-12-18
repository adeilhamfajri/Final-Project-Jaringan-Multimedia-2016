<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class relawan extends CI_Controller {

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
		$this->load->view('relawan/index');
	}

	public function lokasi_bencana()
	{
		$this->load->view('relawan/lokasi_bencana');
	}

	public function kebutuhan_korban()
	{
		$this->load->view('relawan/kebutuhan_korban');
	}

	public function dana_masuk()
	{
		$this->load->view('relawan/dana_masuk');
	}

	public function bantuan_materi()
	{
		$this->load->view('relawan/bantuan_materi');
	}

	public function jenis_bantuan_materi()
	{
		$this->load->view('relawan/jenis_bantuan_materi');
	}

	public function log()
	{
		$this->load->view('relawan/log');
	}

}
