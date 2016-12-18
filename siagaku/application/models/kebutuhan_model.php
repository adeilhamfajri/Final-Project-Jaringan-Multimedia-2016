<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class kebutuhan_model extends CI_Model{

	public function getAllKebutuhan()
	{
		$this->db->from('kebutuhan');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getLastKebutuhan()
	{
		$this->db->from('kebutuhan');
		$this->db->order_by("kebutuhan.id_kebutuhan", "desc");
        $this->db->limit(12);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getKebutuhanById($id)
	{
		$this->db->from('kebutuhan');
		$this->db->where('kebutuhan.id_kebutuhan',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getKebutuhanByLocation($location)
	{
		$this->db->from('kebutuhan');
		$this->db->where('kebutuhan.id_lokasi',$location);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function insertKebutuhan($KebutuhanData)
	{
		$this->db->insert('kebutuhan', $KebutuhanData);
	}
}