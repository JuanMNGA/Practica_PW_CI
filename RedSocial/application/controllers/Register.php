<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function index(){
		$this->load->model('Usuario_model');
    		$this->load->helper(array('form', 'url','date'));
  		$passwordinfo = $this->Usuario_model->hashSSHA($this->input->post('password'));
                $now          = date("Y-m-d H:i:s");
                $data_to_store = array(
                    'email' => $this->input->post('email'),
                    'salt' => $passwordinfo['salt'],
                    'password' => $passwordinfo['encrypted'],
                    'nombre_usuario' => $this->input->post('username'),
                    'fecha_alta' => $now,
                    'rol' => 1
                );
                //if the insert has returned true then we show the flash message
                if ($this->Usuario_model->store_user($data_to_store)) {
                    $data['flash_message'] = TRUE;
                } else {
                    $data['flash_message'] = FALSE;
                }
                $this->load->view('login/login_view');
	}

}
