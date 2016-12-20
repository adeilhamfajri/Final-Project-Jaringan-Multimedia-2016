<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_gambar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('gambar_model');
        $this->load->helper('url');
    }

    public function index(){
    	$this->load->view('relawan/header');
    	$this->load->view('relawan/gambar_bencana');
    }

    public function get_gambar(){
    	$data = $this->gambar_model->getAllImage();
		$this->load->view('relawan/header');
    	$this->load->view('relawan/gambar_bencana', array('data' => $data));
    }

    public function do_addimage(){
         $deskripsi_gambar = $_POST['deskripsi_gambar'];
         $tanggal_gambar = date("Y-m-d H:i:s");
      

      // var_dump($_POST);
		$target_dir = "./assets/img/bencana/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;

		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			
			if($check !== false) {
			//	echo "File is an image - " . $check["mime"] . ".";
				$data_insert =  array(
			 	'deskripsi_gambar' => $deskripsi_gambar,
                'nama_gambar' => $_FILES["fileToUpload"]["name"],
			 	'tanggal_gambar' => $tanggal_gambar,

			 );

				$res = $this->gambar_model->addDataImage($data_insert);
				
                redirect('index.php/crud_gambar/get_gambar', 'refresh:1');

				
				$uploadOk = 1;
			} 

			else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
      	
      	exit;
        
        // $config['upload_path']          = '$path';
        // $config['allowed_types']        = 'gif|jpg|jpeg|png';

        // $this->load->library('upload', $config);
   //     $this->upload->initialize($config);



        // if ( ! $this->upload->do_upload('userfile'))
        // {
        //         $error = array('error' => $this->upload->display_errors());

        //        $this->load->view('relawan/gambar_bencana', $error);
        //   //      print_r($_FILES);

                
        // }
        // else
        // {
        //         $data = array('upload_data' => $this->upload->data());

        // }

   //      $data_insert =  array(
			// 'deskripsi_gambar' => $deskripsi_gambar,
			// 'tanggal_gambar' => $tanggal_gambar,

			// );

	//	$res = $this->gambar_model->addDataImage($data_insert);


    }

    public function do_editImage($id_gambar){
        $gambar = $this->gambar_model->GetGambar("where id_gambar = '$id_gambar'");

        $gambar = array(
            "id_gambar" => $gambar[0]['id_gambar'],
            "nama_gambar" => $gambar[0]['nama_gambar'], 
            "deskripsi_gambar" => $gambar[0]['deskripsi_gambar'],
            "tanggal_gambar" => $gambar[0]['tanggal_gambar'],
            );
        $this->load->view('relawan/header');
        $this->load->view("relawan/form_editgambar", $gambar);

    }

    public function do_updateImage(){


        $id_gambar = $_POST['id_gambar'];
        $nama_gambar = $_POST['nama_gambar'];
        $deskripsi_gambar = $_POST['deskripsi_gambar'];
        $tanggal_gambar = $_POST['tanggal_gambar'];
        
        $target_dir = "./assets/img/bencana/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;

        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        if(isset($_POST["submit"])) {
            echo "tes";
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            
            if($check !== false) {
            //  echo "File is an image - " . $check["mime"] . ".";
                $data_insert =  array(
                'deskripsi_gambar' => $deskripsi_gambar,
                'nama_gambar' => $_FILES["fileToUpload"]["name"],
                'tanggal_gambar' => $tanggal_gambar,

             );

                $where = array('id_gambar' => $id_gambar);
                $res = $this->gambar_model->updateGambar($data_insert, $where);
                
                redirect('index.php/crud_gambar/get_gambar', 'refresh:1');

                
                $uploadOk = 1;
            } 

            else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }


    }


}