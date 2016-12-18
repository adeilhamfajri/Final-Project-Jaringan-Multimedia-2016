<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class lokasi_model extends CI_Model{

	public function getAllLocation()
	{
		$this->db->from('lokasi');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getLocationById($id)
	{
		$this->db->from('lokasi');
		$this->db->where('lokasi.id_lokasi',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function insertLocation($LocationData)
	{
		$this->db->insert('lokasi', $LocationData);
	}
}