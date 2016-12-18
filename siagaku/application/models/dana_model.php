<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dana_model extends CI_Model{

	public function getAllDana()
	{
		$this->db->from('dana');
		$query = $this->db->get();
		return $query->result_array();
	}
	

	public function getDana($where="")
	{
		$data = $this->db->query('select * from dana '.$where);
		return $data->result_array();
	}


	//12 donasi terakhir untuk ditampilkan di home
	public function getLastDana()
	{
		$this->db->from('dana');
		$this->db->order_by("dana.id_dana", "desc");
        $this->db->limit(12);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getDanaById($id)
	{
		$this->db->from('dana');
		$this->db->where('dana.id_dana',$dana);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function insertDana($DanaData)
	{
		$this->db->insert('dana', $DanaData);
	}

	public function updateDana($DanaData, $where){
		$res = $this->db->update('dana', $DanaData, $where);
		return $res;
	}
}