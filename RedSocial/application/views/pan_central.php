<div class="col-md-7" align="center">
	<?php echo form_open('index.php/Main/add_publication/','class="form"');?>
	<div class="form-group">
	<textarea name="publicacion" class="form-control" rows="3" placeHolder="Añade tu publicación..."></textarea>
	</div>
	<div class="form-group">
	<span class="pull-left">
		<select name="privacidad" class="form-control"> 
			<option value="1">Público</option>
			<option value="2">Privado</option>
		</select>
	</span>
	</div>
	<div class="form-group">
	<span class="pull-right"><button type="submit" class="btn btn-primary">Publicar</button></span>
	</div>
	<?php form_close();?>
	<br><br>
	<ul class="nav nav-tabs nav-justified">
		<li role="presentation" class="active"> <a href="#"> Todo </a> </li>
		<li role="presentation"> <a href="#"> Interés </a> </li>
		<li role="presentation"> <a href="#"> Amigos </a> </li>
		<li role="presentation"> <a href="#"> Asociaciones </a> </li>
		<li role="presentation"> <a href="#"> Tiendas </a> </li>
	</ul>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="<?php echo base_url('index.php/Main/show_wall');?>"></iframe>
	</div>
</div> <!-- Muro -->
