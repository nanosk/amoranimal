	
<!DOCTYPE html>
<html>
<head>
<title>Catalogo de Promos</title>
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->

<?php 
	  $template = '../catalogo1/';
	  
	  //CSS
	  echo $this->Html->css($template.'css/bootstrap.min');
	  echo $this->Html->css($template.'css/fancybox/jquery.fancybox');
	  echo $this->Html->css($template.'css/jcarousel');
	  echo $this->Html->css($template.'css/flexslider');
	  echo $this->Html->css($template.'css/style');
	  echo $this->Html->css($template.'skins/default');
	  
	  
	  
	  //JAVASCRIPT
	  

 echo $this->Html->script($template.'js/jquery.min');
 echo $this->Html->script($template.'js/jquery.easing.1.3');
 echo $this->Html->script($template.'js/bootstrap.min');
 echo $this->Html->script($template.'js/jquery.fancybox.pack.min');
 echo $this->Html->script($template.'js/jquery.fancybox-media');
 echo $this->Html->script($template.'js/google-code-prettify/prettify');
 echo $this->Html->script($template.'js/portfolio/jquery.quicksand');
 echo $this->Html->script($template.'js/portfolio/setting');
 echo $this->Html->script($template.'js/jquery.flexslider');
 echo $this->Html->script($template.'js/animate');
 echo $this->Html->script($template.'js/custom');
 
 
	   
   
	   
	   
	  echo $this->fetch('meta');
      echo $this->fetch('css');
	  echo $this->fetch('script');
 ?>

<!--script-->
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span>AMOR ANIMAL</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo $this->html->url( array('controller'=>'paginas', 'action'=>'index'))?>">Inicio</a></li>
                       
                        <li><a href="<?php echo $this->html->url( array('controller'=>'paginas', 'action'=>'promociones'))?>">Promociones</a></li>
                        <li><a href="<?php echo $this->html->url( array('controller'=>'paginas', 'action'=>'contacto'))?>">Contacto</a></li>
						<li><a href="<?php echo $this->html->url( array('controller'=>'users', 'action'=>'login'))?>">Iniciar sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	
	<?php echo $this->fetch('content')?>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Accesos</h5>
					<ul class="link-list">
						<li><a href="#">Promociones</a></li>
						<li><a href="#">Contacto</a></li>
						<li><a href="#">Iniciar sesion</a></li>
					
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					
					
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy;  </span><a href="http://bootstraptaste.com" target="_blank">Bootstraptaste</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>




		
</body>
</html>