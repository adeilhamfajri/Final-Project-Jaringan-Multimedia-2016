<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class gambar_model extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }


    public function getAllImage()
    {
      $viewimage=$this->db->query("SELECT * from gambar order by tanggal_gambar");
      return $viewimage->result_array();
    }
	
	public function getLastImage()
    {
		$this->db->from('gambar');
		$this->db->order_by("gambar.tanggal_gambar", "desc");
        $this->db->limit(4);
		$query = $this->db->get();
		return $query->result();
    }

    public function addDataImage($data_tabel){
        $res = $this->db->insert('gambar', $data_tabel);
        return $res;
    }

    public function deleteImage($nama_tabel, $where){
        $res = $this->db->delete($nama_tabel, $where);
        return $res;
    }

    public function GetGambar($where="")
    {
        $data = $this->db->query('select * from gambar '.$where);
        return $data->result_array();
    }

        public function updateGambar($Datagambar, $where){
        $res = $this->db->update('gambar', $Datagambar, $where);
        return $res;
    }

}