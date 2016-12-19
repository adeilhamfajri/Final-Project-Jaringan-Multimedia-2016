<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_jenisbarang extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('relawan/index');
	// }

	public function jenis_bantuan_materi()
	{
		$this->load->model('barang_model');
		$data['barang'] = $this->barang_model->getAllBarang();
		$this->load->view('relawan/header');
		$this->load->view('relawan/jenis_bantuan_materi', $data);
	}

	public function tambah_barang(){
		$this->load->model('barang_model');
		$barang = array(
		        'nama_barang' => $this->input->post('nama_barang')
		);
		$this->barang_model->insertBarang($barang);
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_jenisbarang/jenis_bantuan_materi';
			</script>
		<?php
	}

	public function hapus_barang($id){
		$this->db->where('id_barang', $id);
		$this->db->delete('barang');
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_jenisbarang/jenis_bantuan_materi';
			</script>
		<?php
	}

}
