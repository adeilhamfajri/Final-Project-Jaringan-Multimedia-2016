<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class lokasi_model extends CI_Model{

	public function getAllLocation()
	{
		$data = $this->db->query('select * from lokasi ');
		return $data->result_array();
	}

	public function getLocation($where="")
	{
		$data = $this->db->query('select * from lokasi '.$where);
		return $data->result_array();
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

	public function updateLocation($LocationData, $where){
		$res = $this->db->update('lokasi', $LocationData, $where);
		return $res;
	}
}