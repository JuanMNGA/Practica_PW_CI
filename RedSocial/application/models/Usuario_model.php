<?php

class Usuario_model extends CI_Model
{    
    var $details;
    
    function validate_user($email, $password){
        // Build a query to retrieve the user's details
        // based on the received username and password
        $this->db->from('usuario');
        $this->db->where('email', $email);
        $query = $this->db->get();
                
        // If one row is returned
        if ($query->num_rows() == 1) {
			// Check if password is correct
		$user = $query->row();
       		if (password_verify($password, $user->password)) {
                // user authentication details are correct
				// Set the users details into the $details property of this class
				$this->details = $user;
				// Call set_session to set the user's session vars via CodeIgniter
				$this->set_session();
				return true;
            }
        }
        
        return false;
    }
    
    function set_session(){
        // session->set_userdata is a CodeIgniter function that
        // stores data in CodeIgniter's session storage.  Some of the values are built in
        // to CodeIgniter, others are added.  See CodeIgniter's documentation for details.
        $this->session->set_userdata(array(
            'id' => $this->details->id,
            'nombre' => $this->details->nombre_usuario,
            'email' => $this->details->email,
            'isLoggedIn' => true
        ));
    }
    /**
    * Update user
    * @param array $data - associative array with data to store
    * @return boolean
    */
    	function update_user($id, $data){
		$this->db->where('id', $id);
		$this->db->update('usuario4', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
    
    /**
    * Delete user
    * @param int $id - user id
    * @return boolean
    */
	function delete_user($id){
		
		echo $id;
		
		$this->db->where('id', $id);
		$this->db->delete('usuario4'); 
	}
	
	/**
    * Store the new user into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    	function store_user($data){
		$insert = $this->db->insert('usuario', $data);
	    	return $insert;
	}
	
	function get_user(){
		$userdata['id'] = $this->details->id;
		$userdata['name'] = $this->details->nombre_usuario;
		return $userdata;
	}
}
