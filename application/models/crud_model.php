<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model{
    
    public function do_insert($dados=NULL){
        if ($dados != NULL):
            $this->db->insert('curso_ci_usuarios',$dados);
            $this->session->set_flashdata('cadastroOK','Cadastro realizado com sucesso!');
            redirect('crud/create');
        endif;
    }
   
}   