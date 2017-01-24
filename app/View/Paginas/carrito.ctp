 <div class="container">

		<?php 
		echo $this->element('header'); 
		$datos_navbar=array( 'categorias' => $categorias, 'razon_social'=>$empresa);
  		echo $this->element('nav_bar_galeria2', $datos_navbar);
  		
  		//echo var_dump($carrito);
  		?>
		
		
		
 <div class="row">
	 <div class="span12">

	 
	<h3> Carrito de Compras</h3><br>
	 
        <table class="table table-bordered table-striped">
		  <thead>
			  <tr>
				<th>Eliminar</th>
				<th>Imagen</th>
				<th>Producto</th>
				<th>Marca</th>
				<th>Cantidad</th>
				<th>Precio Unit.</th>
				<th>Total</th>
			  </tr>
			</thead>
			<tbody>		
		
<?php 
 $suma =0;
 foreach ($carrito as $item): 
 $img= $item['Producto']['imagen'];
 $nombre = $item['Producto']['nombre'];
 $precio = $item['Producto']['precio'];
 $cantidad = $item['Carrito']['cantidad'];
 $suma = $suma + ($precio * $cantidad);

?>

<tr>
<td class="">
<?php 
    echo $this->Form->hidden('carrito',array('value'=> 1 ));
    
    echo $this->Form->postLink('Eliminar', 
    array('controller'=>'Carritos', 'action' => 'delete', $item['Carrito']['id']),
	array('confirm' => 'Estas Seguro?')); 
	?>
	</td>
<td class="muted center_text">
<div class="span2">
<?php echo $this->Html->image($img, array('alt' => 'Imagen no encontrada')); ?>
</div>
</td>
<td><?php echo $nombre; ?></td>
<td><?php echo $nombre; ?></td>
<td><?php echo $cantidad; ?></td>
<td><?php echo '$'.  $precio; ?></td>
<td><?php echo '$' . $precio * $cantidad; ?></td>

</tr>
<?php endforeach; ?>
    
					 
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><strong>$<?php echo $suma ?></strong></td>
			  </tr>		  
			</tbody>
		  </table>
		  
		  <form class="form-horizontal">
		<fieldset>	  
		  
		  
		    <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">

                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  <h3>Aplicar Codigo de Descuento</h3>
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
		          <div class="control-group">
		            <label for="input01" class="control-label">Codigo de Descuento: </label>
		            <div class="controls">
		              <input id="input01" class="input-xlarge" placeholder="Enter your coupon here" type="text">
		              <p class="help-block">Solo puede ingresar un descuento a la vez</p>
		            </div>
		          </div>
		        </div>
              </div>
            </div>
          </div>

          <div class="row">
		  		  
			<div class="span2 offset5">
            <?php echo $this->Html->link('Continuar...',array('controller' => 'paginas', 'action' => 'galeria'),array('class'=>'btn btn-primary'));?>
			</div>		  
			<div class="span5">
            
			<?php echo $this->Html->link('Solicitar Pedido',array('controller' => 'paginas', 'action' => 'verificardatos'),array('class'=>'btn btn-primary pull-right'));?>
			</div>
          </div>
        </fieldset>
        </form>
        
       

</div> <!-- /container -->





<!--
"put01" class="input-xlarge" placeholder="Enter your gift voucher here" type="text">
              <p class="help-block">Solo podra usar un Voucher por cliente</p>
            </div>
          </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
		  		  
			<div class="span2 offset5">
            <?php echo $this->Html->link('Continuar...',array('controller' => 'paginas', 'action' => 'galeria'),array('class'=>'btn btn-primary'));?>
			</div>		  
			<div class="span5">
            
			<?php echo $this->Html->link('Solicitar Pedido',array('controller' => 'paginas', 'action' => 'verificardatos'),array('class'=>'btn btn-primary pull-right'));?>
			</div>
          </div>
        </fieldset>
        </form>
        
       

</div> <!-- /container -->






