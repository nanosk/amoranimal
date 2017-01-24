<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
		
	<?php 
	  $template = '../bootstrap-3.3.6-dist/';
	  
	  //CSS
	  echo $this->Html->css($template.'css/bootstrap.min');
	  echo $this->Html->css($template.'css/navbar-fixed-top');
	  
	  ?>
	  
	
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
				<a class="navbar-brand" href="#">
				<img alt="Brand" src="...">
				Razon social</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">Catalogo</a></li>
            <li><a href="#about">Nosotros</a></li>
            <li><a href="#contact">Contacto</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias y Marcas <span class="caret"></span></a>
              <ul class="dropdown-menu">
               
			   <li class="dropdown-header">Categorias</li>
			   <li><a href="#">Something else here</a></li>
			   <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Marcas</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
		  
		  
		  <?php echo $this->Form->create('Pagina',array('action'=>'galeria','class'=>'navbar-form navbar-left','role'=>'search'));?>
          <div class="form-group">
             <input type="text" class="form-control" placeholder="Que estas Buscando?">
          </div>
			<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>
			
			</button>
		  <?php echo $this->Form->end()?>
		  
		  
		  <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Mi cuenta</a></li>
            
            
          </ul>
		  
		  
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	 <div class="container">
	 
	 
		 <div class="row">
		 <div class="col-xs-12 col-lg-12">
				<?php echo $this->fetch('slider')?>
		 </div>
		 </div>
		 
		 <div class="row">
		 <div class="col-xs-12 col-lg-12">
			 <?php echo $this->element('mensaje'); ?>
		 </div>
		 </div>
		 
		 <div class="row">
		 
				<?php echo $this->fetch('content')?>
		 
		 </div>
     </div>
    
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
	
	
	<?php 
	   echo $this->Html->script($template.'js/bootstrap.min');
	   echo $this->Html->script($template.'js/holder');
	   
	   
	   echo $this->fetch('meta');
       echo $this->fetch('css');
	   echo $this->fetch('script');
	 ?>
  </body>
</html>