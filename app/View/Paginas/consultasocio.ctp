

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Consulta de Socio</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
					
<?php echo $this->Form->create('Pagina',array('action'=>'consultasocio', 'class'=>'form-horizontal'));?>

<?php echo $this->element('createform', $form); ?>
<?php echo $this->element('enviar'); ?>
<?php //debug($socio) ?>

 <div class="row">
 <div class="col-sm-12 col-xs-12 ">
<?php if(isset($socio) and $socio != 0 ){ ?>

<h4>Resultado de la busqueda</h4>
 <hr>	
 <div class="form-group col-sm-12">
	<label class="col-sm-4 control-label no-padding-right" > Estado : </label>
	<?php 
	$estado = "";
	if  ($socio['Socio']['activo']== 1){
			$estado = "ACTIVO";
		}else{
			$estado = "INACTIVO";	
		}

	?>
	<input type="text" disabled value="<?php  echo $estado ?>" > 
	
</div>

<div class="form-group col-sm-12">
	<label class="col-sm-4 control-label no-padding-right" > Nombre: </label>
	<input class="col-sm-6" type="text" disabled value="<?php echo $socio['Socio']['nombre'] ?>" > 
	
</div>
	 	
<div class="form-group col-sm-12">
	<label class="col-sm-4 control-label no-padding-right" > Apellido: </label>
	<input class="col-sm-6"  type="text" disabled value="<?php echo $socio['Socio']['apellido'] ?>" > 
	
</div>
 	
<div class="form-group col-sm-12">
	<label class="col-sm-4 control-label no-padding-right" > Direccion: </label>
	<input class="col-sm-6"  type="text" disabled value="<?php echo $socio['Socio']['direccion'] ?>" > 
	
</div>

<div class="form-group col-sm-12">
	<label class="col-sm-4 control-label no-padding-right" > Telefono: </label>
	<input class="col-sm-6"  type="text" disabled value="<?php echo $socio['Socio']['telefono'] ?>" > 
	
</div>
<div class="form-group col-sm-12">
	<label class="col-sm-4 control-label no-padding-right" > Email: </label>
	<input class="col-sm-6" type="text" disabled value="<?php echo $socio['Socio']['email'] ?>" > 
	
</div>
	
	
<?php } ?>

</div>
</div>
	
  </div><!-- /.box-body -->
</div><!-- /.box -->




