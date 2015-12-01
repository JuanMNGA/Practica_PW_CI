<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$page = "/RedSocial/index.php/Main/show_wall";
$sec = "10";
?><!DOCTYPE html>
<html lang="es-es">
<head>
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	<link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
</head>
<body>
<div id="autoload">
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
</div>
</body>
</html>
