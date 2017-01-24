
<div class= "container">
		<?php 
		echo $this->element('header'); 
		
		$datos_navbar=array( 'categorias' => $categorias, 'razon_social'=>$empresa);
  		echo $this->element('nav_bar_galeria2', $datos_navbar);
  		?>
		
		
		
		<div class="row">

	<div class="span3">
	<h4>Nuestra ubicacion</h4>
	<h3> <?php echo  $datos[0][0]['Empresadato']['descripcion'];?> <br></h3>
	<p><?php echo  $datos[1][0]['Empresadato']['descripcion'];?><br>
	   
	   <?php echo  $datos[2][0]['Empresadato']['descripcion'];?><br>
	   <?php echo  $datos[4][0]['Empresadato']['descripcion'];?><br>
	   C.P: 
	   <?php echo  $datos[3][0]['Empresadato']['descripcion'];?><br>
	   
	</p>	
	<h5>Telefono:</h5>
	<p>1234-123-1234</p>
	<div style="width:200px;height:200px">
	
	<a href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;
	geocode=&amp;q=EntreRios@-31.737105,-60.520950
	&amp;ie=UTF8&amp;z=12&amp;t=m&amp;iwloc=near">Donde Estamos (Click Aqui)</a>
	</td>
	<td align="right"></td>
	</tr>
	</tbody>
	</table>
	</div>
	<br><br>
	
	</div>
	<div class="span9">
	<div class="page-header">
    	<h2>Contactenos</h2>
  	</div>

 
  <div class="row">
  
  
      <div class="span9">
      
        <fieldset>
        
		<div class="control-group">
		<?php
		  echo $this->Form->create('Consulta',array('controller'=>'consultas','action'=>'add'));
		  echo $this->Form->hidden('id_prod',array('value'=> 0));
		  echo $this->Form->hidden('origen',array('value'=> 'contacto'));
		  echo $this->Form->hidden('destinatario_id',array('value'=> $admin_id));
		  echo $this->Form->hidden('tipomensaje_id',array('value'=> $CONS_GENERAL));
		  if ($user_id > 0){
		  	echo $this->Form->hidden('user_id',array('value'=> $user_id));
		  }else{
		  	echo $this->Form->hidden('user_id',array('value'=> null));
		  }
		  
		  echo $this->Form->input('nombreusuario',array('value'=> $username,'label' => 'Nombre de Usuario:', 'class'=>"span5", 'placeholder'=>"Ingrese su Nombre..."));
		  echo $this->Form->input('email',array('value'=>$email,'label' => 'Email:', 'class'=>"span5", 'placeholder'=>"Ingrese su Email..."));
		  echo $this->Form->input('texto',array('type'=>'textarea','label' => 'Consulta:', 'class'=>"span8", 'placeholder'=>"Escriba aqui su pregunta..."));
		  echo $this->Form->end('Enviar Consulta',array('class'=>'btn btn-primary pull-right'));
		  
		  if (isset($mensaje)){
		  	  echo $mensaje;
		  }
		?>
        </div>
        
        <p></p><br>
        </fieldset>
      

    </div>
  
  

  <!-- Misc Elements -->
  
  </div><!-- /row -->

	</div>
</div>






