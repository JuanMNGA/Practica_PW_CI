<?php

class Publicacion_model extends CI_Model
{

	function insert_publication($data){
		$insert = $this->db->insert('publicacion', $data);
		return $insert;
	}
	
	function select_publication($privacidad){
		$this->db->from('publicacion');
		$this->db->where('privacidad',$privacidad);
		$this->db->join('usuario','publicacion.id_usuario = usuario.id');
		$this->db->order_by('fecha_publicacion','desc');
		$query = $this->db->get();
		
		if($query->num_rows() >= 1){
			$publicacion = $query->result_array();
			return $publicacion;
		}
		
		return null;
	}
}
?>
