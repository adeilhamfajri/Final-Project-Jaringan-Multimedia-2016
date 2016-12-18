<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_kebutuhan extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('relawan/index');
	// }

	public function kebutuhan_korban()
	{
		$this->load->model('barang_model');
		$this->load->model('lokasi_model');
		$this->load->model('kebutuhan_model');
		$data['barang'] = $this->barang_model->getAllBarang();
		$data['lokasi'] = $this->lokasi_model->getAllLocation();
		$data['kebutuhan'] = $this->kebutuhan_model->getAllKebutuhan();
		$this->load->view('relawan/kebutuhan_korban', $data);
	}

	public function tambah_kebutuhan(){
		$this->load->model('kebutuhan_model');
		$butuh = array(
				'id_lokasi' => $this->input->post('id_lokasi'),
		        'id_barang' => $this->input->post('id_barang'),
		        'jumlah_kebutuhan' => $this->input->post('jumlah_kebutuhan'),
		        'tanggal_permintaan' => $this->input->post('tanggal_permintaan')
		);
		$this->kebutuhan_model->insertKebutuhan($butuh);
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_kebutuhan/kebutuhan_korban';
			</script>
		<?php
	}

	public function show_editkebutuhan($id)
	{
		$this->load->model('barang_model');
		$this->load->model('lokasi_model');
		$this->load->model('kebutuhan_model');
		$data['barang'] = $this->barang_model->getAllBarang();
		$data['lokasi'] = $this->lokasi_model->getAllLocation();
		$data['kebutuhan'] = $this->kebutuhan_model->getAllKebutuhan();
		$data['cek'] = $id;
		$this->load->view('relawan/kebutuhan_korban', $data);
	}

	public function edit_kebutuhan($id){
		$butuh = array(
				'id_lokasi' => $this->input->post('id_lokasi'),
		        'id_barang' => $this->input->post('id_barang'),
		        'jumlah_kebutuhan' => $this->input->post('jumlah_kebutuhan'),
		        'tanggal_permintaan' => $this->input->post('tanggal_permintaan')
		);
		$this->db->where('id_kebutuhan', $id);
		$this->db->update('kebutuhan', $butuh); 
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_kebutuhan/kebutuhan_korban';
			</script>
		<?php
	}

	public function hapus_kebutuhan($id){
		$this->db->where('id_kebutuhan', $id);
		$this->db->delete('kebutuhan');
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_kebutuhan/kebutuhan_korban';
			</script>
		<?php
	}

}
