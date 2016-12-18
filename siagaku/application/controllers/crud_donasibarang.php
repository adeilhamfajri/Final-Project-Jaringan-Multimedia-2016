<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_donasibarang extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('relawan/index');
	// }

	public function bantuan_materi()
	{
		$this->load->model('barang_model');
		$this->load->model('donasi_model');
		$data['barang'] = $this->barang_model->getAllBarang();
		$data['donasi'] = $this->donasi_model->getAllDonasi();
		$this->load->view('relawan/bantuan_materi', $data);
	}

	public function tambah_donasi(){
		$this->load->model('donasi_model');
		$donasi = array(
		        'id_barang' => $this->input->post('id_barang'),
		        'jumlah_donasi' => $this->input->post('jumlah_donasi'),
		        'nama_donatur' => $this->input->post('nama_donatur'),
		        'tanggal_donasi' => $this->input->post('tanggal_donasi')
		);
		$this->donasi_model->insertDonasi($donasi);
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_donasibarang/bantuan_materi';
			</script>
		<?php
	}

	public function show_editdonasi($id)
	{
		$this->load->model('barang_model');
		$this->load->model('donasi_model');
		$data['barang'] = $this->barang_model->getAllBarang();
		$data['donasi'] = $this->donasi_model->getAllDonasi();
		$data['cek'] = $id;
		$this->load->view('relawan/bantuan_materi', $data);
	}

	public function edit_donasi($id){
		$donasi = array(
		        'id_barang' => $this->input->post('id_barang'),
		        'jumlah_donasi' => $this->input->post('jumlah_donasi'),
		        'nama_donatur' => $this->input->post('nama_donatur'),
		        'tanggal_donasi' => $this->input->post('tanggal_donasi')
		);
		$this->db->where('id_donasi', $id);
		$this->db->update('donasi', $donasi); 
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_donasibarang/bantuan_materi';
			</script>
		<?php
	}

	public function hapus_donasi($id){
		$this->db->where('id_donasi', $id);
		$this->db->delete('donasi');
		?>
			<script>
				location.href = '<?php echo base_url(); ?>index.php/crud_donasibarang/bantuan_materi';
			</script>
		<?php
	}

}
