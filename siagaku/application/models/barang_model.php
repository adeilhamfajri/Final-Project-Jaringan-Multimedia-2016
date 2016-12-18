<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class barang_model extends CI_Model{

	public function getAllBarang()
	{
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getBarangById($id)
	{
		$this->db->from('barang');
		$this->db->where('barang.id_barang',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function insertBarang($BarangData)
	{
		$this->db->insert('barang', $BarangData);
	}
}