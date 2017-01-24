
<?php 

//debug ($parametros);
//debug ($labels);
?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
	aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       <h4 class="modal-title" id="myModalLabel">Filtros de busqueda</h4>
    </div>
    <div class="modal-body">
                                        
<div class="row">
<div class="col-sm-12">
        <div class="box box-primary ">
                <div class="box-header with-border">
                  
				  
				  
				  
				  
				  
                </div><!-- /.box-header -->                                        
<div class="box-body">
<?php echo $this->Form->create($controller,array('action'=>$action, 'class'=>'form-group')); ?>

        <div class="row">
        <div class="col-sm-6">


        <?php 
        $rangofecha = false;
        foreach ($parametros as $item): 
        ?>


        <?php 
        switch ($item['type']){ 
         case 'rangofecha':
         	$rangofecha = true;
         	$namefecha = $item['name'];
        break;
          case 'fecha':
        		?>
        <!-- Fecha -->
        <div class="form-group">
        <label> <?php echo $item['label'];?>  </label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
        <?php echo $this->Form->input($item['name'],array('label'=>'',
        'class'=>'form-control form_date', 'type'=>'text','readonly'=>'true',
        'minYear' => date('Y') - 70,
        'maxYear' => date('Y') - 18,));
        ?>
        </div>
        </div>
        <?php    
        break;
         case 'select2': 
        ?>

        <!-- tipo texto -->
        <div class="form-group">
			<label><?php echo $item['label']?></label>
			
        </div>

			<?php echo $this->Form->input($item['name'],array('label'=>false, 'class'=>'form-control'));?>

        <?php    
        break;
         case 'text': 
        ?>

        <!-- tipo texto -->
        <div class="form-group">
        <?php echo $this->Form->input($item['name'],array($item['label'],'class'=>'form-control'));?>
        </div>

        <?php 
        break; 
        	case 'month':
        ?>

        <div class="form-group">
        <label>Mes</label>
        <?php echo $this->Form->month($item['name'],array('monthNames'=>true,'label'=>$item['label'],'class'=>'form-control')); ?>
        </div>

        <?php 
        	break;

        default:
        	break;
        }
        ?>

        <?php endforeach ?>
        </div><!-- col 6 -->

 
        <?php if ($rangofecha==true){ ?>	
        <div class="col-sm-6">
         
         
         <!-- Date range -->
        <div class="form-group">
        <label> <?php echo $namefecha;?> Desde </label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
        <?php echo $this->Form->input( 'fdesde',array('label'=>'',
        'class'=>'form-control form_date', 'type'=>'text','readonly'=>'true',
        'minYear' => date('Y') - 70,
        'maxYear' => date('Y') - 18,));
        ?>
        </div>
        </div>
        <!-- Fecha Rango Desde - Hasta -->
        <div class="form-group">
        <label> <?php echo $namefecha;?> Hasta </label>
        <div class="input-group">
        <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
        <?php echo $this->Form->input( 'fhasta',array('label'=>'',
        'class'=>'form-control form_date', 'type'=>'text','readonly'=>'true',
        'minYear' => date('Y') - 70,
        'maxYear' => date('Y') - 18,));
        ?>
        </div>
        </div>

        </div><!-- col 6 -->

        <?php } ?>
        </div><!-- row --> 
 

</div>
</div>
</div><!--  col 12 -->







</div><!-- row -->
<br>
<br>

</div><!-- body -->


      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            
      <button class="btn btn-primary" type="submit">
       <i class="fa fa-search"></i> Filtrar
       <?php echo $this->Form->end(); ?> 
       </button>   
                               
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
 


<script type="text/javascript">

$("[data-mask]").inputmask();
	$('.form_date').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0,
		format: 'yyyy/mm/dd'
    });
</script>

                            