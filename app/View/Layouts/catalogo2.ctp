<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>BOOTCLASIFIED - Responsive Classified Theme</title>
 
 <?php
	$template = '../catalogo2/';
	  
	  echo $this->Html->css($template.'assets/bootstrap/css/bootstrap');
	  echo $this->Html->css($template.'assets/css/style');
	  echo $this->Html->css($template.'assets/css/owl.carousel');
	  echo $this->Html->css($template.'assets/css/owl.theme');
	  
 
 ?>
 
 
 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
 
<script>
    paceOptions = {
      elements: true
    };
</script>

</head>
<body class=" pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
<div id="wrapper">
<div class="header">
<nav class="navbar   navbar-site navbar-default" role="navigation">
<div class="container">
<div class="navbar-header">
<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a href="http://templatecycle.com/demo/bootclassified-v1.2/index.html" class="navbar-brand logo logo-title">
 
<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span> AMOR <span>ANIMAL</span> </a> </div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'login')); ?>">Iniciar Sesion</a></li>


</ul>
</div>
 
</div>
 
</nav>
</div>
 
<div class="intro-inner">
<div class="about-intro" style="
    background:url(images/bg2.jpg) no-repeat center;
	background-size:cover;">
<div class="dtable hw100">
<div class="dtable-cell hw100">
<div class="container text-center">
<h1 class="intro-title animated fadeInDown"> YOUR PAGE TITLE </h1>
</div>
</div>
</div>
</div>
 
</div>
 
<div class="main-container inner-page">
<div class="container">
<div class="row clearfix">
<h1 class="text-center title-1"> Page Title </h1>
<hr class="center-block small text-hr">
<div class="col-lg-12 text-center">
<div>
<h2> Content Goes Here </h2>
</div>
</div>
<div style="clear:both">
<hr>
</div>
<div class="col-lg-12">
<div class="white-box text-center">
<p> Content Goes Here </p>
</div>
</div>
<div style="clear:both">
<hr>
</div>
<div class="col-md-8">
<div class="white-box text-center">
<p> Content Goes Here </p>
</div>
</div>
<div class="col-md-4">
<div class="white-box text-center">
<p> Content Goes Here </p>
</div>
</div>
<div style="clear:both">
<hr>
</div>
<div class="col-md-4">
<div class="white-box text-center">
<p> Content Goes Here </p>
</div>
</div>
<div class="col-md-8">
<div class="white-box text-center">
<p> Content Goes Here </p>
</div>
</div>
<div style="clear:both">
<hr>
</div>
<div class="col-md-6">
<div class="white-box text-center">
<p> Content Goes Here </p>
</div>
</div>
<div class="col-md-6">
<div class="white-box text-center">
<p> Content Goes Here </p>
</div>
</div>
</div>
</div>
</div>
 
<div class="footer" id="footer">
<div class="container">
<ul class=" pull-left navbar-link footer-nav">
<li><a href="http://templatecycle.com/demo/bootclassified-v1.2/index.html"> Home </a> <a href="http://templatecycle.com/demo/bootclassified-v1.2/about-us.html"> About us </a> <a href="http://templatecycle.com/demo/bootclassified-v1.2/blank-page.html#"> Terms and Conditions </a> <a href="http://templatecycle.com/demo/bootclassified-v1.2/blank-page.html#"> Privacy Policy </a> <a href="http://templatecycle.com/demo/bootclassified-v1.2/contact.html"> Contact us </a> <a href="http://templatecycle.com/demo/bootclassified-v1.2/faq.html"> FAQ </a>
</li></ul>
<ul class=" pull-right navbar-link footer-nav">

</ul>
</div>
</div>
 
</div>
 
 
 <?php
 
  echo $this->Html->script($template.'assets/js/pace.min');
  echo $this->Html->script($template.'assets/bootstrap/js/bootstrap.min');
  echo $this->Html->script($template.'assets/js/owl.carousel.min');
  echo $this->Html->script($template.'assets/js/form-validation');
  echo $this->Html->script($template.'assets/js/jquery.matchHeight-min');
  echo $this->Html->script($template.'assets/js/hideMaxListItem');
  echo $this->Html->script($template.'assets/plugins/jquery.fs.scroller');
  echo $this->Html->script($template.'assets/plugins/jquery.fs.selecter');
  echo $this->Html->script($template.'assets/js/script');
  
	
 ?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>

 

</body>
</html>
