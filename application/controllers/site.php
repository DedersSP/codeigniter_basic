<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller{
    
    public function index(){
        $dados = array(
            'titulo_pagina' => 'Titulo da Home Page do meu site',
            'view_principal' => 'Home'            
        );
        $this->load->view('site', $dados);
    }
    
    public function contato(){
        $dados = array(
            'titulo_pagina' => 'Fale Conosco',
            'view_principal' => 'Contato'            
        );
        $this->load->view('site', $dados);
    }
     
     
    
}