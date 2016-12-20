<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_lokasi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('lokasi_model');
        $this->load->helper('url');
    }

    public function index(){
		redirect('index.php/Crud_lokasi/get_location');
	}

    public function get_location(){
    	$data = $this->lokasi_model->getAllLocation();
		$this->load->view('relawan/header');
    	$this->load->view('relawan/lokasi_bencana', array('data' => $data));
    }

    public function do_insert(){
	
		$nama_lokasi = $_POST['nama_lokasi'];
		$latitude = $_POST['latitude'];
		$longitude = $_POST['longitude'];
		$deskripsi = $_POST['deskripsi'];


		$data_insert =  array(
			'nama_lokasi' => $nama_lokasi,
			'latitude' => $latitude,
			'longitude' => $longitude,
			'deskripsi' => $deskripsi,
			);

		$res = $this->lokasi_model->insertLocation($data_insert);
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_lokasi/index';
			</script>
		<?php
		
	}

	public function do_edit($id_lokasi){

		$lokasi = $this->lokasi_model->getLocation("where id_lokasi = '$id_lokasi'");

		$data = array(
			'id_lokasi' => $lokasi[0]['id_lokasi'],
			"nama_lokasi" => $lokasi[0]['nama_lokasi'], 
			"latitude" => $lokasi[0]['latitude'],
			"longitude" => $lokasi[0]['longitude'],
			"deskripsi" => $lokasi[0]['deskripsi'],
			);
		
        $this->load->view('relawan/header');
        $this->load->view("relawan/form_editlokasi", $data);
    }
	
	public function do_update(){
		$id_lokasi = $_POST['id_lokasi'];
		$nama_lokasi = $_POST['nama_lokasi'];
		$latitude = $_POST['latitude'];
		$longitude = $_POST['longitude'];
		$deskripsi = $_POST['deskripsi'];


		$data_update = array(
			'id_lokasi' => $id_lokasi,
			'nama_lokasi' => $nama_lokasi, 
			'latitude' => $latitude,
			'longitude' => $longitude,
			'deskripsi' => $deskripsi,
			);

		$where = array('id_lokasi' => $id_lokasi);
		$res = $this->lokasi_model->updateLocation($data_update, $where);

		if($res >= 1)
			redirect('index.php/crud_lokasi/index');

	}
	
	public function do_delete($id){
		$this->db->where('id_lokasi', $id);
		$this->db->delete('lokasi');
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_lokasi/index';
			</script>
		<?php
	}

}