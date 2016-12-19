<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class donasi_model extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }


    public function getAllImage()
    {
      $viewimage=$this->db->query("SELECT * from image order by img_id");
      return $viewimage->result_array();
    }

    public function addImage($nama_tabel, $data_tabel){
        $res = $this->db->insert($nama_tabel, $data_tabel);
        return $res;
    }

    public function deleteImage($nama_tabel, $where){
        $res = $this->db->delete($nama_tabel, $where);
        return $res;
    }



}