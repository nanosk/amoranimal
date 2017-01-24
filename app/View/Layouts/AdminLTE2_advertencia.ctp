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

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
       
        

        <!-- Main content -->
        <section class="content">
     
          <!-- Main row -->
         <div class="row">
			
				
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
   

	
  </body>
</html>
    