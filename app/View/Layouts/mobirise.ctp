<!DOCTYPE html>
<html>
<head>
  <!-- Mobirise Free Bootstrap Template, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.6.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="shortcut icon" href="#" type="image/x-icon">
  
  <meta name="description" content="bootstrap carousel">
  <title>AmorAnimal</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
 
  
   
   <?php 
	  $template = '../mobirise/';
	  
	  //CSS
	  //echo $this->Html->css($template.'css/');
	   
      echo $this->Html->css($template.'assets/bootstrap/css/bootstrap.min');
	  echo $this->Html->css($template.'assets/animate.css/animate.min');
	  echo $this->Html->css($template.'assets/socicon/css/socicon.min');
	  echo $this->Html->css($template.'assets/mobirise/css/style');
	  echo $this->Html->css($template.'assets/mobirise-slider/style');
	  echo $this->Html->css($template.'assets/mobirise-gallery/style');
	  echo $this->Html->css($template.'assets/mobirise/css/mbr-additional');
   
	  ?>
  
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  
  
</head>
<body>

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-20">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="https://mobirise.com/bootstrap-template/"><img class="mbr-navbar__brand-img mbr-brand__img" src="../mobirise/assets/images/logo1.png" alt="AmorAnimal"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="<?php echo $this->Html->url(array('controller'=>'paginas','action'=>'index'))?>">AmorAnimal</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
						<li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#header1-22">Que es AmorAnimal?</a></li> 
						<li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#form1-35">Contactenos</a></li> 
						<li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'login'))?>">INICIAR SESION</a></li>
						</ul>
						</div>
                        <div class="mbr-navbar__column">
						<ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active">
						<li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-default" href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'registrarse'))?>">REGISTRARSE</a>
						</li>
						
						</ul></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $this->fetch('content'); ?>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-37" style="background-color: rgb(68, 68, 68);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p>Copyright (c) 2015 Company Name. <a href="https://mobirise.com/bootstrap-template/license.txt" class="text-gray">License</a></p><p></p>
            </div>
        </div>
    </div>
</footer>

    <?php 
	  //JAVASCRIPT
	  echo $this->Html->script($template.'assets/jquery/jquery.min');
	  echo $this->Html->script($template.'assets/bootstrap/js/bootstrap.min');
	  echo $this->Html->script($template.'assets/smooth-scroll/SmoothScroll');
	  echo $this->Html->script($template.'assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe');
	  echo $this->Html->script($template.'assets/jarallax/jarallax');
      echo $this->Html->script($template.'assets/masonry/masonry.pkgd.min');
      echo $this->Html->script($template.'assets/imagesloaded/imagesloaded.pkgd.min');
      echo $this->Html->script($template.'assets/social-likes/social-likes');
      echo $this->Html->script($template.'assets/mobirise/js/script');
      echo $this->Html->script($template.'assets/mobirise-gallery/script');
	   
	  echo $this->fetch('meta');
      echo $this->fetch('css');
	  echo $this->fetch('script');
	?>
  
  
</body>
</html>