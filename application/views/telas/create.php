<?php
echo form_open('crud/create',array('class'=>'form-horizontal'));
echo validation_errors('<p>','</p>');
if ($this->session->flashdata('cadastroOK')): 
    echo '<p>'.$this->session->flashdata('cadastroOK').'</p>'; 
endif;
echo form_label('Nome Completo');
echo form_input(array('id'=>'nome','name'=>'nome'),set_value('nome'),'autofocus');
echo form_label('Email');
echo form_input(array('name'=>'email'),set_value('email'));
echo form_label('Login');
echo form_input(array('name'=>'login'),set_value('login'));
echo form_label('Senha');
echo form_password(array('name'=>'senha'),set_value('senha'));
echo form_label('Repita a Senha');
echo form_password(array('name'=>'senha2'),set_value('senha2'))."<br><br>";
echo form_submit(array('name'=>'cadastrar','class'=>'btn btn-primary'),'Cadastrar');
echo form_close();