<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
	// Class itungan
	class penjualan extends CI_Controller{
		function __Construct(){
			parent::__construct();
			$this->load->helper(array('url','form')); // nge load helper
		}
		function index(){
		}
		function barang(){
				$data['kode']=(string)$this->input->post('kode',true);
				$data['nama']=(string)$this->input->post('nama',true);
				$data['harga']=(int)$this->input->post('harga',true);

			if ($data['kode']=="A001")
            {
                $data['nama']="Monitor";
				$data['harga']='750000';

			}
            else if ($data['kode']=="A002")
            {
 				$data['nama']="HardDisk";
				$data['harga']='550000';    
		    }
            else if ($data['kode']=="A003")
            {
                $data['nama']="Stabilizer";
				$data['harga']='125000'; 
            }
			
			

			 $data['qty']=(int)$this->input->post('qty',true);
			 //fungsi jumlah
	        $data['jumlah']=$data['harga']*$data['qty'];
			 $this->load->view('jual_view',$data);
		}
		
	}
	
	