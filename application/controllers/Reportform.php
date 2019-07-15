<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportform extends CI_Controller {
    private function isAuth(){
        if($this->session->tempdata('credential') == NULL){
			redirect('login');
		}
    }

    public function index()
	{
        $this->isAuth();
		$this->load->view('reportform', array('formname' => NULL));
    }
    
    public function f($formname){
        $this->isAuth();
        $this->load->view('reportform', array('formname' => $formname));
    }

}
