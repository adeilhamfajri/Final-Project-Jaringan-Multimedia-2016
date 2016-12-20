<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class log_model extends CI_Model{
	public function getLog(){
		$data = $this->db->query("SELECT * FROM log");
		return $data->result_array();
	}
	
	public function getLastLog()
    {
		$this->db->from('log');
		$this->db->join('barang' , 'log.id_barang = barang.id_barang');
		$this->db->order_by("log.tanggal", "desc");
        $this->db->limit(12);
		$query = $this->db->get();
		return $query->result();
    }

	public function insertLog($LocationData)
	{
		$this->db->query("INSERT INTO log(tanggal, jumlah, id_barang, harga) VALUES(
			NOW(), ".$LocationData['jumlah'].", ".$LocationData["id_barang"].", ".$LocationData['harga'].")");
	}
}

?>