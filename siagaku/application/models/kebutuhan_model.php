<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class kebutuhan_model extends CI_Model{

	//semua kebutuhan
	public function getAllKebutuhan()
	{
		$this->db->from('kebutuhan');
		$query = $this->db->get();
		return $query->result();
	}
	
	//12 kebutuhan terakhir untuk ditampilkan di home
	public function getLastKebutuhan()
	{
		$this->db->from('kebutuhan');
		$this->db->join('barang' , 'kebutuhan.id_barang = barang.id_barang');
		$this->db->join('lokasi' , 'kebutuhan.id_lokasi = lokasi.id_lokasi');
		$this->db->order_by("kebutuhan.tanggal_permintaan", "desc");
        $this->db->limit(12);
		$query = $this->db->get();
		return $query->result();
	}
	
	//mendapatkan kebutuhan berdasarkan id_kebutuhan
	public function getKebutuhanById($id)
	{
		$this->db->from('kebutuhan');
		$this->db->join('barang' , 'kebutuhan.id_barang = barang.id_barang');
		$this->db->where('kebutuhan.id_kebutuhan',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	//mendapatkan kebutuhan berdasarkan id_lokasi
	public function getKebutuhanByLocation($location)
	{
		$this->db->from('kebutuhan');
		$this->db->join('barang' , 'kebutuhan.id_barang = barang.id_barang');
		$this->db->where('kebutuhan.id_lokasi',$location);
		$query = $this->db->get();
		return $query->result();
	}
	
	//insert kebutuhan baru
	public function insertKebutuhan($KebutuhanData)
	{
		$this->db->insert('kebutuhan', $KebutuhanData);
	}
}