<!-- 
PARAMETROS:
variable $form

boton_id
boton_titulo
controller
action
idajaxupdate
idfrmnew

$form['param']
son los campos a ingresar en el formulario


idea:
se crea un formulario del tipo submit default = false
apunta a un action ajax
dentro de la vista que se hace la llamada a este elemento se debe escribir el codigo ajax 


-->


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $form['boton_id']?>">
	<?php if (isset($form['boton_icon'])){  ?>
		<i class="<?php echo $form['boton_icon'] ?>"></i>
	<?php } ?>
	<?php echo $form['boton_titulo']; ?>
	
</button>
<!-- Modal -->
<div class="modal fade modal-info" id="<?php echo $form['boton_id']?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $form['boton_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="<?php echo $form['boton_id']?>"><?php echo $form['boton_titulo']; ?></h4>
			</div>
			<div class="modal-body">
    		<div class="row">
			<div class="col-sm-12">
			
			
			
			
			
			<?php echo $this->Form->create($form['controller'],array('action'=>$form['action'], 'id'=>$form['frm_id'],'default'=>$form['default'], 'class'=>'form-horizontal')); ?>
										
			<?php

			foreach ($form['param']as $param): 
				//debug($param);
				echo $this->element('row', array('param'=>$param));
				
			endforeach;
			?>
			
	<!--		
</div>
</div>
-->
			</div>
    		</div>

			</div>
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-info"   data-dismiss="modal"><?php echo $form['boton_titulo']; ?>
					<?php echo $this->Form->end() ?>
					</button>
					
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					
				</div>
			
		</div>
	</div>

</div>