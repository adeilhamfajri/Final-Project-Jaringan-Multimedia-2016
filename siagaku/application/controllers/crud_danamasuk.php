<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_danamasuk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('dana_model');
        $this->load->helper('url');
    }

	public function index(){
		redirect('index.php/Crud_danamasuk/get_danamasuk');
	}

	public function get_danamasuk(){
    	$data = $this->dana_model->getAllDana();
		$this->load->view('relawan/header');
    	$this->load->view('relawan/dana_masuk', array('data' => $data));
    }

	public function do_insert(){
	
		$nominal = $_POST['nominal'];
		$nama_donatur = $_POST['nama_donatur'];
		$tanggal = date("y-m-d");


		$data_insert =  array(
			'nominal' => $nominal,
			'nama_donatur' => $nama_donatur,
			'tanggal' => $tanggal,
			);

		$res = $this->dana_model->insertDana($data_insert);
		$this->db->query('UPDATE total_dana SET total_dana = (SELECT SUM(nominal) FROM dana)');
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_danamasuk/index';
			</script>
		<?php
	}

	public function do_edit($id_dana){

		$dana = $this->dana_model->GetDana("where id_dana = '$id_dana'");

		$data = array(
			"id_dana" => $dana[0]['id_dana'],
			"nominal" => $dana[0]['nominal'], 
			"nama_donatur" => $dana[0]['nama_donatur'],
			);
		$this->load->view('relawan/header');
        $this->load->view("relawan/form_editdanamasuk", $data);
        }


    public function do_update(){

    	$id_dana = $_POST['id_dana'];
		$nominal = $_POST['nominal'];
		$nama_donatur = $_POST['nama_donatur'];
		

		$data_update = array(
			'nominal' => $nominal,
			'nama_donatur' => $nama_donatur, 
		);

		$where = array('id_dana' => $id_dana);
		$res = $this->dana_model->updateDana($data_update, $where);

		if($res >= 1)
			redirect('index.php/crud_danamasuk/index');
	}
	
	public function do_delete($id){
		$this->db->where('id_dana', $id);
		$this->db->delete('dana');
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_danamasuk/index';
			</script>
		<?php
	}
		
}
