<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class donasi_model extends CI_Model{

	public function getAllDonasi()
	{
		$this->db->from('donasi');
		$query = $this->db->get();
		return $query->result();
	}
	
	//12 donasi terakhir untuk ditampilkan di home
	public function getLastDonasi()
	{
		$this->db->from('donasi');
		$this->db->join('barang' , 'donasi.id_barang = barang.id_barang');
		$this->db->order_by("donasi.tanggal_donasi", "desc");
        $this->db->limit(12);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getDonasiById($id)
	{
		$this->db->from('donasi');
		$this->db->where('donasi.id_donasi',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function insertDonasi($DonasiData)
	{
		$this->db->insert('donasi', $DonasiData);
	}
}