<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct(){
  		parent::__construct();
 	}
    
    function index()
    {
        $this->load->helper(array('form', 'url','date'));
        $this->show_login();
        //}
    }
    
    // Funcion para hacer login del usuario
    
    function input_login_user()
    {
        // Create an instance of the user model
        $this->load->model('Usuario_model');
        
        // Grab the email and password from the form POST
        $email = $this->input->post('email');
        $pass  = $this->input->post('password');
        
        //Ensure values exist for email and pass, and validate the user's credentials
        if ($email && $pass && $this->Usuario_model->validate_user($email, $pass)) {
            // If the user is valid, redirect to the main view
            $data = array(
				'email' => $email,
				'isLoggedIn' => true,
				'per_page' => 20
			);
            $this->session->set_userdata($data);
            $this->show_main_page();
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login();
        }
    }
    
    // Funcion para registrar nuevo usuario
    
    function input_register(){
    	$this->load->model('Usuario_model');
        $now          = date("Y-m-d H:i:s");
        $data_to_store = array(
        	'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
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
    
    function show_login(){
        $this->load->view('login/login_view');
    }
    
    function show_register(){
        $this->load->view('login/login_register_view');
    }
    
    function show_wall(){
    	$this->load->view('refresh_wall');
    }
    
    function show_main_page(){
    	$this->load->model('Usuario_model');
    	$this->load->model('Publicacion_model');
    	$this->load->view('navegacion');
    	$data['nombre_usuario'] = $this->session->userdata('nombre');
	$this->load->view('pan_izquierdo',$data);
	$this->load->view('pan_central');
	$this->load->view('pan_derecho');
    }
    
    function logout_user()
    {
        $this->session->sess_destroy();
        $this->index();
    }
    
    function add_publication(){
    	$this->load->model('Usuario_model');
    	$this->load->model('Publicacion_model');
    	
    	$now = date("Y-m-d H:i:s");
    	$publicacion_to_store = array(
    		'id_usuario' => $this->session->userdata('id'),
    		'texto' => $this->input->post('publicacion'),
    		'privacidad' => $this->input->post('privacidad'),
    		'fecha_publicacion' => $now
    	);
    	
    	if($this->Publicacion_model->insert_publication($publicacion_to_store)){
    		$data['flash_message'] = TRUE;
        } else {
                $data['flash_message'] = FALSE;
        }
        $this->show_main_page();
    }
    
}
