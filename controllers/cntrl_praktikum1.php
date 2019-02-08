<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cntrl_tugas1 extends CI_Controller {

public function __construct()
{
	parent::__construct();

	//Do your magic here
}
	public function index($value=:tampil)
	{
		$this->load->view('tampil/'.$value);
	}

	// public function input()
	// {
		
	// 	$nama= $this->input->post('nama');
	// 	echo $nama."<br>";
	// 	$alamat= $this->input->post('alamat');
	// 	echo $alamat."<br>";
	// 	$desk= $this->input->post('desk');
	// 	echo $desk."<br>";
	// 	$foto= $this->input->post('foto');
	// 	echo $foto."<br>";
		// $arraydata = array('nama'=>$nama,'alamat'=>$alamat,'desk'=>$desk);
		// $this->session->set_userdata($arraydata);
  //   print_r($this->session->userdata());

	}
}

/* End of file cntrl_tugas1.php */
/* Location: ./application/controllers/cntrl_tugas1.php */
 ?>