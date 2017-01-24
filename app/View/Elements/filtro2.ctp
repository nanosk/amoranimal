

<div class="box box-default">
<div class="box-group" id="accordion">
	  <div class="box-header with-border">
	  <h5 class="box-title">
	   <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		<i class="fa fa-search-plus"></i> Filtros
	  </a>
	  </h5>
	  </div><!-- /.box-header -->
      <div id="collapseOne" class="panel-collapse collapse in">
	  <div class="box-body">
 		
	 
			<?php 
			
			if(!empty($datos)){
				echo $this->Form->create($datos['controller'],array('action'=>$datos['action'], 'class'=>'form-group')); 
				
				foreach ($datos['parametros'] as $item):
				   
					echo $this->element('row2',array('param'=>$item));
				endforeach;
			?>
			
		    <button type="submit" class="btn btn-xs btn-flat btn-info"><i class="fa fa-refresh"></i> Procesar Filtro</button> 
		    
		    <?php }else{ ?>
		    	<p>Opcion Filtros deshabilitada en esta pantalla</p>
		    	
		    	
		    <?php } ?>
	</div>
	</div>
</div>
</div>

