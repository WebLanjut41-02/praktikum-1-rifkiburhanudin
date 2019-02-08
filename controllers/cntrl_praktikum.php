<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cntrl_praktikum extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session')
    }

	public function index($value='tampil')
	{
		// $this->load->view('main/header');
		// $this->load->view('main/footer');
		$this->load->view('tampil/'.$value);
	}
	 public function komen()
	{
		# code...
		$data['komen']=$this->input->post('message');
		$this->load->view('pages/home', $data,);
	}



public function login(){
    $user = array(
        array("username" => "rifki", "password" => 123),
        array("username" => "burhan", "password" => 234)
    );

    $this->session->set_userdata('data',$user);

    $username = $this->input->post('username');
    $pass = $this->input->post('pass');

    for($i=0; $i < count($user) ; $i++){
        if ($user[$i]['username']==$username && $user[$i]['password']==$pass){
            rediract('con_tugas/post','refresh');
        }
    }
    redirect('cntrl_praktikum/index','refresh');
}
public function logout(){
    $this->session->sess_destroy();
    $this->load->view('home');
}
}

/* End of file cntrl.tugas.php */
/* Location: ./application/controllers/cntrl.tugas.php */
?>