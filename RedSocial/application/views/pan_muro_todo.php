<?php
	$mysqli = mysqli_connect("localhost","root","","redsocial");
	$res = mysqli_query($mysqli,"SELECT usuario.nombre_usuario, publicacion.texto, publicacion.fecha_publicacion FROM usuario, publicacion WHERE usuario.id = publicacion.id_usuario ORDER BY publicacion.fecha_publicacion DESC");
	if(count($res) > 0){
	foreach($res as $row){
	echo '<div class="panel panel-primary">';
		echo '<div class="panel-heading">';
			echo "Por usuario: ".$row['nombre_usuario'];
		echo '</div>';
		echo '<div class="panel-body">';
			echo $row['texto'];
		echo '</div>';
		echo '<div class="panel-footer">';
			echo "Publicado en: ".$row['fecha_publicacion'];
		echo '</div>';
	echo '</div>';
	}
	}
?>
