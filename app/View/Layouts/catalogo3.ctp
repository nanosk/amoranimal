<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Amor Animal</title>
 <?php
	$template = '../catalogo3/';
	  
	  echo $this->Html->css($template.'css/bootstrap.min');
	  echo $this->Html->css($template.'css/bootstrap-select');
	  echo $this->Html->css($template.'css/style');
	  echo $this->Html->css($template.'css/flexslider');
	  echo $this->Html->css($template.'css/font-awesome.min');
	  
 
 ?>
 
 
 <?php
 
  echo $this->Html->script($template.'js/jquery.min');
  echo $this->Html->script($template.'js/bootstrap.min');
  echo $this->Html->script($template.'js/bootstrap-select');
  echo $this->Html->script($template.'js/jquery.leanModal.min');
  
  echo $this->Html->css($template.'css/jquery.uls');
  echo $this->Html->css($template.'css/jquery.uls.grid');
  echo $this->Html->css($template.'css/jquery.uls.lcd');
  echo $this->Html->css($template.'css/jquery.uls');
  
  echo $this->Html->script($template.'js/jquery.uls.data');
  echo $this->Html->script($template.'js/jquery.uls.data.utils');
  echo $this->Html->script($template.'js/jquery.uls.lcd');
  echo $this->Html->script($template.'js/jquery.uls.languagefilter');
  echo $this->Html->script($template.'js/jquery.uls.regionfilter');
  echo $this->Html->script($template.'js/jquery.uls.core');
  
  echo $this->Html->script($template.'js/jquery.flexisel');
 
	 
 ?>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>


<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
</head>
<body>

<div class="header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo $this->Html->url(array('controller' => 'paginas', 'action' => 'index')); ?>">Amor Animal</a>
			</div>
			<div class="header-right">
			<?php if ($USER_ID > 0 ){ ?>
				<a class="account" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'micuenta')); ?>">Mi Cuenta</a>
			
			
			<?php }else{ ?>
			<a class="account" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'login')); ?>">Iniciar Sesion</a>
			
			<?php }?>
			
			
			</div>
		</div>
	</div>
	<?php echo $this->fetch('header')?>
	
		<!-- content-starts-here -->
		<div class="content">
		<?php echo $user ?>
			<?php echo $this->fetch('content')?>
			
			
		</div>
		<!--footer section start-->		
		<footer>
				
			<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="index.html"><span>Amor</span>Animal</a>
				</div>
				<div class="footer-social-icons">
					<ul>
						<li><a class="facebook" href="#"><span>Facebook</span></a></li>
						<li><a class="twitter" href="#"><span>Twitter</span></a></li>
						<li><a class="flickr" href="#"><span>Flickr</span></a></li>
						<li><a class="googleplus" href="#"><span>Google+</span></a></li>
						<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
					</ul>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		</footer>
        <!--footer section end-->
</body>
</html>