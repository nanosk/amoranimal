
<?php 
/*
recibe como parametro:
$operaciones = array(
					array('controller'=>'', 
						  'action'=>'', 
						  'param'=>array(),
						  'class'=>'', 
						  'titulo'=>'', 
						  'icon'=>'' ),
				    array('controller'=>'', 
						  'action'=>'', 
						  'param'=>array(),
						  'class'=>'', 
						  'titulo'=>'', 
						  'icon'=>'' ) 
			  
)


*/
?>
		
		<div class="form-group">

			<?php foreach ($operaciones as $item): ?>
				<a href="<?php echo $this->Html->url(
								array('controller'=>$item['controller'], 
										'action' => $item['action'], 
													$item['param'][0])) ?>"
					class="<?php echo $item['class'] ?>">
				<i class="<?php echo $item['icon']?>"></i>
					<?php echo $item['titulo'] ?>
				</a>

			<?php endforeach?>
	   </div>

