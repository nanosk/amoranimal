<div class="container">

		<?php 
		echo $this->element('header'); 
		
		$datos_navbar=array( 'categorias' => $categorias, 'razon_social'=>$empresa);
  		echo $this->element('nav_bar_galeria2', $datos_navbar);
  		
  		//echo var_dump($carrito);
  		?>
		
		
	
	
	<div class="row">
	<div class="span12">
	
	<div class="accordion" id="accordion2">
    <div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
					<h3>Paso 1: Verificar Datos</h3>
				</a>
			</div>
	
		<div id="collapse3" class="accordion-body collapse">
		<div class="accordion-inner">
		<?php 
		echo $this->Form->create('User', array('action' => 'edit',$id));
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('solicitarpedido', array('type' => 'hidden', 'value'=>'1'));
		
		?>
			<div class="span5 no_margin_left">
					<legend><small>Datos personales</small></legend>
					
					  <div class="control-group">
					    <?php echo $this->Form->input('nombre',array('label'=>'Nombre','class'=>'span4'));?>
					  </div>
					  <div class="control-group">
						<?php echo $this->Form->input('apellido',array('label'=>'Apellido','class'=>'span4'));?>
					  </div>					  
					  <div class="control-group">
						<?php echo $this->Form->input('email',array('label'=>'Email','class'=>'span4'));?>
					  </div>					 

					  <div class="control-group">
						<?php echo $this->Form->input('telefono',array('label'=>'Telefono','class'=>'span4'));?>
					  </div>
			</div>
			  
	
		
		  <div class="span6">
					<legend> <small>Datos de envio </small></legend>
					
					  <div class="control-group">
						<?php echo $this->Form->input('direccion',array('label'=>'Direccion','class'=>'span4'));?>
					  </div>
					  <div class="control-group">
						<?php echo $this->Form->input('ciudad',array('label'=>'Ciudad','class'=>'span4'));?>
					  </div>				
					   <div class="control-group">
						<?php echo $this->Form->input('provincia',array('label'=>'Provincia','class'=>'span4'));?>
					  </div>
					  <div class="control-group">
						<?php echo $this->Form->input('pais',array('label'=>'Pais','class'=>'span4'));?>
					  </div>					  
					  <div class="control-group">
						<?php echo $this->Form->input('codigopostal',array('label'=>'Codigo Postal','class'=>'span4'));?>
					  </div>
		   </div>
		  <button class="btn btn-primary">
		  Actualizar datos
	      <?php echo $this->Form->end(); ?>
	      </button>
	       
	      			  
		</div>
		</div>
		</div>
			
			
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
					<h3>Paso 2: Metodo de Pago</h3>
				</a>
			</div>
			<div id="collapse4" class="accordion-body collapse">
				<div class="accordion-inner">
						<input value="option2" name="payment1" type="radio" checked="true"> Efectivo<br>
						<input value="option1" name="payment1" type="radio" disabled="true"> Mercado Pago<br>
						<br><br>
				<div class="control-group">
            	<label for="textarea" class="control-label">Commentarios</label>
            <div class="controls">
              <textarea rows="3" id="textarea" class="input-xlarge span11"></textarea>
            </div>
          </div>
					  			
					  </div>
			</div>
		/home/ezequiel/Webs/Market</div>
			
          </div>
	  
		</div>

      </div>
      <?php echo $this->Html->link('Generar Pedido',array('controller' => 'paginas', 'action' => 'generarpedido'),array('class'=>'btn btn-primary pull-right'));?>
      
      	

</div> <!-- /container -->






    
      	

</div> <!-- /container -->






