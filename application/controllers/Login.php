<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
	public function auth()
	{
		// cek credential dari POST
		$username = $_POST['username'];
		$password = $_POST['password'];

		// set variabel (session?) dengan nama opd
		session_start();
		$this->session->set_tempdata('credential', $username, 3600);

		// route ke halaman home
		// note: /index.php/home
		redirect("home");
	}
	public function logout(){
		session_destroy();
		redirect("login");
	}
}
?>