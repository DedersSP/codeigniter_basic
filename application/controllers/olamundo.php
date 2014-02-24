<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Olamundo extends CI_Controller{
	public function index(){
		$this->load->view('olamundo');
	}
	
	public function incluir(){
		$this->load->view('exemplo2');
	}
	

}
