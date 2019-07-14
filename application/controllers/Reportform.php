<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportform extends CI_Controller {
	public function index()
	{
		if($this->session->tempdata('credential') == NULL){
			redirect('login');
		}
		$this->load->view('reportform');
	}

}
?>