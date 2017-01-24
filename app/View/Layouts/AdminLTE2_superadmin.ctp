<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AmorAnimal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, userc-scalable=no" name="viewport">
    
    
	
	<?php 
	
	  $template = '../AdminLTE2/';
	  
	  //CSS
	  echo $this->Html->css($template.'bootstrap/css/bootstrap.min');
	  echo $this->Html->css($template.'dist/css/AdminLTE.min');
	  echo $this->Html->css($template.'dist/css/skins/_all-skins.min');
	  echo $this->Html->css($template.'plugins/iCheck/flat/blue');
	  echo $this->Html->css($template.'plugins/morris/morris');
	  echo $this->Html->css($template.'plugins/jvectormap/jquery-jvectormap-1.2.2');
	  echo $this->Html->css($template.'plugins/datepicker/datepicker3');
	  echo $this->Html->css($template.'plugins/daterangepicker/daterangepicker-bs3');
	  echo $this->Html->css($template.'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min');
	  //echo $this->Html->css($template.'');
	  
	  echo $this->Html->css($template.'plugins/select2/select2.min');
	  
	  //datatable
	  echo $this->Html->css($template.'plugins/datatables/dataTables.bootstrap');
	  
	  
	  
	if  ($USER_IMG){
		$imagen = '../files/User/imagen/'.$user['User']['id'].'/'. $user['User']['imagen'];
		
	}else{
		$imagen = 'user2.png'; 
	}
					
	?>
    
    <!--
 <style type="text/css">
	.content-wrapper  {
background-image:url('/img/gym4.jpg') ;
background-repeat:no-repeat;
background-position:center center;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
   
}
</style>
    -->
   
    <!-- Font Awesome  --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   
    <!-- Ionicons --> 
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  
  </head>
  
  <body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo $this->Html->url(array('controller'=>'paginas','action'=>'administrador')); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">ADM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Panel de Control</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <?php	echo $this->Html->image($imagen, array('class'=>'user-image','width'=>'100px','height'=>'100px')); ?>
					
                 
                  <span class="hidden-xs">
                  
                  	 <?php echo $USER_LOGIN ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                  <?php echo $this->Html->image($imagen,array('class'=>'img-circle','width'=>'100px','height'=>'100px'));?>
                  
                    <p>
                   	<?php echo $USER_LOGIN .' - '. $USER_ROLE ?>
                      
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    
                    
                    
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                   
                      <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'editusuario')); ?>" 
                       class="btn btn-default btn-flat">
		                Mi Cuenta</a>
		               
		              
                    <br>
                       
                     
		                <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>" 
                       class="btn btn-default btn-flat">
		                Salir</a>
		             
		             
		             </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
        
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
			 <li class="header">MENU SISTEMA</li>
                
				
				 	
	<li class="treeview" id="mnu_adm">
				<a href="#">
	                <i class="fa fa-link"></i>
	                <span> Administracion</span>
	                <i class="fa fa-angle-left pull-right"></i>
              	</a>
	              <ul class="treeview-menu">
	                <li id="mnu_adm_admins">
					 <a href="<?php echo $this->Html->url(array('controller' => 'administradores', 'action' => 'index')); ?>">
					     <i class="fa fa-circle-o"></i>Gestion Admins </a>
					</li>
					<li id="mnu_adm_pagos">
					<a href="<?php echo $this->Html->url(array('controller' => 'pagos', 'action' => 'index')); ?>">
					     <i class="fa fa-circle-o"></i> Pagos </a>
					</li>
					
					<li id="mnu_adm_socios">
					 <a href="<?php echo $this->Html->url(array('controller' => 'socios', 'action' => 'index')); ?>">
					     <i class="fa fa-circle-o"></i> Socios </a>
					</li>
					
					<li id="mnu_adm_comercios">
					 <a href="<?php echo $this->Html->url(array('controller' => 'comercios', 'action' => 'index')); ?>">
					     <i class="fa fa-circle-o"></i> Comerciantes </a>
					</li>
					
					
					<li id="mnu_adm_formapagos">
					 <a href="<?php echo $this->Html->url(array('controller' => 'Formapagos', 'action' => 'index')); ?>">
						 <i class="fa fa-circle-o"></i> Forma de Pago </a>
					</li>
					
					
					<li id="mnu_adm_promos">
					 <a href="<?php echo $this->Html->url(array('controller' => 'promos', 'action' => 'index')); ?>">
						 <i class="fa fa-circle-o"></i> Promos </a>
					</li>
				
				
	              </ul>
				</li>
						
				
				
				
				 <!-- Modulo Consultas  -->
	            <li class="treeview">
				<a href="#">
	                <i class="fa fa-link"></i>
	                <span> Consultas </span>
	                <i class="fa fa-angle-left pull-right"></i>
              	</a>
	              <ul class="treeview-menu">
	                <li>
					 <a href="<?php echo $this->Html->url(array('controller' => 'paginas', 'action' => 'consultasocio')); ?>">
					     <i class="fa fa-circle-o"></i>Consultar Socios por DNI </a>
					</li>
					
					  <li>
					 <a href="<?php echo $this->Html->url(array('controller' => 'paginas', 'action' => 'promociones')); ?>">
					     <i class="fa fa-circle-o"></i>Catalogo de Promociones</a>
					</li>
					
					
					
	              </ul>
				</li>
				<!-- fin  Modulo Consultas -->
				
				
				
			
				 
			<li class="treeview">
			<a href="#">
				<i class="fa fa-link"></i>
				<span> Seguridad</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			  <ul class="treeview-menu">
				<li>
				 <a href="<?php echo $this->Html->url(array('controller' => 'groups', 'action' => 'add')); ?>">
					 <i class="fa fa-circle-o"></i>Alta Grupos de Usuario</a>
				</li>
				<li>
				 <a href="<?php echo $this->Html->url(array('controller' => 'groups', 'action' => 'index')); ?>">
					 <i class="fa fa-circle-o"></i>Listado Grupos de Usuario</a>
				</li>
			
				<li>
				 <a href="<?php echo $this->Html->url(array('controller' => 'modulos', 'action' => 'add')); ?>">
					 <i class="fa fa-circle-o"></i>Alta de Modulo </a>
				</li>
				<li>
				 <a href="<?php echo $this->Html->url(array('controller' => 'modulos', 'action' => 'index')); ?>">
					 <i class="fa fa-circle-o"></i>Listado de Modulos </a>
				</li>
			
			
				<li>
				 <a href="<?php echo $this->Html->url(array('controller' => 'modulogroups', 'action' => 'add')); ?>">
				     <i class="fa fa-circle-o"></i>Alta de Permiso</a>
				</li>
				<li>
				 <a href="<?php echo $this->Html->url(array('controller' => 'modulogroups', 'action' => 'index')); ?>">
				     <i class="fa fa-circle-o"></i>Listado de Permisos</a>
				</li>
			
			
			
			
				<li>
				 <a href="<?php echo $this->Html->url(array('controller' => 'modulogroups', 'action' => 'add')); ?>">
					 <i class="fa fa-circle-o"></i>Asignar Permisos a Grupo</a>
				</li>
			  
					
				
				
			  </ul>
	  		</li>
            <!-- fin Modulo Promociones -->
			
           
           
            
            
             <li class="treeview">
				<a href="#">
	                <i class="fa fa-user"></i>
	                <span>Mi Cuenta</span>
	                <i class="fa fa-angle-left pull-right"></i>
              	</a>
	              <ul class="treeview-menu">
	              
						
					<li>
					 <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'micuentaadmin')); ?>">
					 <i class="fa fa-circle-o"></i> Ver/Editar Mi Perfil</a>
					</li>	
							
					
	               
					
	              </ul>
			</li>
			<!-- fin Modulo Cuotas -->
			
			
             <li>
              <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>">
                <i class="fa fa-sign-out"></i> <span>Salir</span> 
              </a>
            </li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) 
        
        <section class="content-header">
          <h1>
            Panel de Control
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-Panel de Control"></i> Home</a></li>
            <li class="active">Panel de Control</li>
          </ol>
        </section>
        
        -->
        
        

        <!-- Main content -->
        <section class="content">
     
          <!-- Main row -->
         <div class="row">
				<?php if(isset($debug)){
					echo $this->element('debug',$debug);
					
				} 
				?>
				
				<div class="col-xs-12 col-sm-12">
					<!-- mensaje -->
					<?php 
					echo $this->element('mensaje');
					?>
				</div>
				
 					 <div class="col-xs-12 col-sm-12">
							<?php echo $this->fetch('opciones'); ?>
					 </div>
				<div class="row">
				<div class="col-xs-12 col-sm-12">
					 <?php 
					
					 $col = 12;
					 
					 //datos es filtros, box de filtros, por defecto siempre esta activado
					 // salvo cuando se setee la variable, $this->set('b_filtros',true);
					 
					 if (!empty($b_filtros))
					 {
					 	$col = $col-3;
					 }
					 
					 $classcontent="col-xs-12 col-sm-$col";
					 
					 ?>
						 
						 
						 
						 
						 <div class="<?php echo $classcontent?>">
								<?php echo $this->fetch('content')?>
						 </div>
						 
						 
						 <?php  if (!empty($datos)): ?>
							 <div class="col-xs-12 col-sm-3"> 
								<?php echo $this->fetch('filtros'); ?>
							</div>
					     
						<?php endif;?>
					 	
					
				</div>
			    </div>
				
			</div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016 <a href="3"> Studio</a>.</strong> All rights reserved.
      </footer>

      
  
     
    </div><!-- ./wrapper -->





	<?php 
	  //SCRIPT
	  //echo $this->Html->script('jQuery-2.1.3.min');
	  echo $this->Html->script($template.'plugins/jQuery/jQuery-2.1.4.min');
	  echo $this->Html->script($template.'bootstrap/js/bootstrap.min');
	  echo $this->Html->script($template.'plugins/morris/morris.min');
	  echo $this->Html->script($template.'plugins/sparkline/jquery.sparkline.min');
	  echo $this->Html->script($template.'plugins/jvectormap/jquery-jvectormap-world-mill-en');
	  echo $this->Html->script($template.'plugins/knob/jquery.knob');
	  echo $this->Html->script($template.'plugins/daterangepicker/daterangepicker');
	  echo $this->Html->script($template.'plugins/datepicker/bootstrap-datepicker');
	  echo $this->Html->script($template.'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min');
	  echo $this->Html->script($template.'plugins/slimScroll/jquery.slimscroll.min');
	  echo $this->Html->script($template.'plugins/fastclick/fastclick.min');
	  echo $this->Html->script($template.'dist/js/app.min');
	 // echo $this->Html->script($template.'dist/js/pages/dashboard');
	  echo $this->Html->script($template.'dist/js/demo');
	  
	      
	  //datatables 
	  echo $this->Html->script($template.'plugins/datatables/jquery.dataTables.min');
	  echo $this->Html->script($template.'plugins/datatables/dataTables.bootstrap.min');
	  echo $this->Html->script($template.'plugins/select2/select2.full.min');
	  
	  
	   echo $this->fetch('meta');
       echo $this->fetch('css');
	   echo $this->fetch('script');
	   ?>
   
    <!-- jQuery UI 1.11.4  
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> 
 -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip 
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
  -->
    <!-- Morris.js charts -->
		<script type="text/javascript">
			jQuery(function($){
		
				//select2
				$('.select2').css('width','100%').select2();
				$('.datepicker').datepicker({   format: 'yyyy-mm-dd'});
				
			 
			});
			
			 
			 
		</script>
		
		
	
   <?php echo $this->Js->writeBuffer(array('cache'=>true)); ?>
  </body>
</html>
    