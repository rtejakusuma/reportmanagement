<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		if($this->session->tempdata('credential') != NULL){
			redirect('home');
		}
		$this->load->view('login');
	}
	public function auth()
	{
		// cek credential dari POST
		$username = $_POST['username'];
		$password = $_POST['password'];

		$this->load->model('user_model', 'user');
		if(sizeof($this->user->getUser($username, hash('sha256', $password))) <= 0){
			// butuh error reporting
			redirect('login');
		}
		$opd = $this->user->getOpd($username)[0]->user_opd;

		// set variabel (session?) dengan nama opd
		session_start();
		$this->session->set_tempdata('credential', $opd, 7200);

		// route ke halaman home
		// note: /index.php/home
		redirect("home");
	}
	public function logout(){
		session_destroy();
		redirect("login");
	}
}
