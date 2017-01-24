

<!DOCTYPE html>
<html>
<head>
<title>
		<?php echo $title_for_layout; ?>
</title>
	
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blocky UI Kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<?php 
	
echo $this->Html->css('../blocky/css/bootstrap');
echo $this->Html->css('../blocky/css/style');
echo $this->Html->css('../blocky/css/clndr');
echo $this->Html->css('../blocky/css/');
echo $this->Html->css('../blocky/css/');

echo $this->Html->script('../blocky/js/jquery.min');
echo $this->Html->script('../blocky/js/underscore-min');
echo $this->Html->script('../blocky/js/moment-2.2.1');
echo $this->Html->script('../blocky/js/clndr');
echo $this->Html->script('../blocky/js/site');
echo $this->Html->script('../blocky/js/chart');
echo $this->Html->script('../blocky/js/responsiveslides.min');




	    


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<!-- content -->
<?php echo $this->fetch('content'); ?>
	
<!-- //content -->
</body>
</html>
