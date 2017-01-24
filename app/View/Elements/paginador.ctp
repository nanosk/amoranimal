   
<div class="box-footer clearfix">
<?php
echo $this->Paginator->counter(array(
'format' => 'Pagina %page% de %pages%, Mostrando %current% registros de
%count% en total'
)); 
?>

  <ul class="pagination pagination-sm no-margin pull-right">
	<li>                
	    <?php echo $this->Paginator->prev(' << ',array(),null,array('class' => 'prev')); ?>
	    <?php echo $this->Paginator->numbers(); ?>
	
	  <?php   echo $this->Paginator->next(' >> ',array(),null,array('class' => 'next'));  ?>                        
	</li>
  </ul>

</div>
			