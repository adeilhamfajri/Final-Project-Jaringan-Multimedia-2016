<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home_model extends CI_Model{

	public function getAllLocation()
	{
		$this->db->from('lokasi');
		$query = $this->db->get();
		return $query->result();
	}
}