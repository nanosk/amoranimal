<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amor Animal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    
	
	<?php 
	
	  $template = '../AdminLTE2/';
	  
	  //CSS
	  echo $this->Html->css($template.'bootstrap/css/bootstrap.min');
	  echo $this->Html->css($template.'dist/css/AdminLTE.min');
	  echo $this->Html->css($template.'dist/css/skins/_all-skins.min');
	  echo $this->Html->css($template.'plugins/iCheck/flat/blue');
	
	  
	  
	  
	?>
  
  
<style type="text/css">
body  {  
background-image:url('/img/fondo_login.jpg') ;
background-repeat:no-repeat;
background-position:center center;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
</style>
   
    <!-- Font Awesome  --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   
    
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  
  </head>
  
  <body>
				
   <?php echo $this->fetch('content') ?>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  




	<?php 
	  //SCRIPT
	  echo $this->Html->script($template.'plugins/jQuery/jQuery-2.1.4.min');
	  echo $this->Html->script($template.'bootstrap/js/bootstrap.min');
	  
	 
	  ?>
   
    <!-- jQuery UI 1.11.4 
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> 
    -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip 
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
 -->
    <!-- Morris.js charts  -->
 
  </body>
</html>
    