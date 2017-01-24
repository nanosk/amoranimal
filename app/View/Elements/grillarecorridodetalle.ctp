<!-- recibe como parametro
$recorridodetalle
-->


   <div class="row" id="grillarecorridodetalle">

<?php 
	foreach ($recorrido['Recorridodetalle'] as $item): 
		//SI ESTADO DE PEDIDO = VISITADO, PREGUNTAR POR IDPEDIDO
		$recorridodetalle_id =$item['id'];
		?>
		
	 

					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <a href="#">
                                <div class="well summary-inline">
                                    <div class="form-horizontal">
                                     
                                        <div class="content">
                                            <h4><?php echo $item['Cliente']['apellidoynombre']. ' - ' . $item['Cliente']['razonsocial']; ?></h4>
											<label>Hora disp. cliente:</label> 
											<small>
											<?php 
												if(empty($item['hora'])){
													//echo $item['Hojarutadetalle']['hora'];
												}else{
													echo $item['hora']; 
												}
												?>
												</small>
											<p><?php  if($item['estado_id'] != $VISITADO){ ?>	
											<div class="form-group">	
													<div class="col-xs-6">
														<a href="<?php echo $this->Html->url(array('controller'=>'recorridos', 'action'=>'generarpedido', $recorridodetalle_id ));   ?>" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-ok"></i> Nuevo Pedido</a>
													</div>
													<div class="col-xs-6">
														<a href="<?php echo $this->Html->url(array('controller'=>'recorridos', 'action'=>'sinpedido', $recorridodetalle_id) ); ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i> Sin Pedido </a>
													</div>
											</div>
											  <?php } ?>
											  </p>
                                          
												<?php 
												if($item['estado_id'] == $VISITADO){
													$texto = "";
													if(!$item['pedido_id']){
														$texto = '   <h4> "VISITADO - S/P " </h4>';
													}else{
														$texto = '<h4> "VISITADO" </h4>';
													}
													echo $texto;
													
												} 
											  $recorridodetalle_id = $item['id'];
											  ?>
										
											
										<p>
										<?php if($item['pedido_id'] > 0 ){ ?>
											<label>Nro pedido:</label>
											<a href="<?php echo $this->Html->url(array('controller'=>'pedidocabeceras','action'=>'adminpedido',$item['pedido_id'])); ?>" > <span class="pull-right badge success"><i class="icon  fa fa-truck"></i> <?php echo $item['pedido_id']; ?></span></a> 
										<?php } ?>
										</p>
			
			
			
			<p><div class="form-group"><label>Opciones:</label>
				
						<?php if( in_array ($USER_ROL ,array($ROL_CARGADATOS, $ROL_ADMIN, $ROL_DESARROLLO))){ ?>
						
								<?php echo $this->Html->link('', array('controller' => 'Recorridodetalle','action' => 'edit', 
								$item['id']),
								array('class'=>'glyphicon glyphicon-edit',
								'title'=>'Editar registro','data-toggle'=>'tooltip', 'data-placement'=>'top'));?>
								
								<?php 
								$mensaje = 'Estas Seguro que desea eliminar el registro?'.
								$item['id'];
								echo $this->Form->postLink('', 
								array('controller' => 'Recorridos','action' => 'deletedetalle', $item['id'], $item['recorrido_id']),	
								array('confirm' => $mensaje , 'class'=>'glyphicon glyphicon-trash',
								'title'=>'Eliminar registro','data-toggle'=>'tooltip', 'data-placement'=>'top')); 
								?>
						<?php } ?>
				</div>
			</p>
                                        </div>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
	

	


<?php endforeach; ?>
</div>









