

Bienvenido, <?php echo $user['User']['username'] ?>!
Para realizar la activacion de la cuenta es necesario acceder al siguiente link:
<?php echo $link; ?>
 
		
		
Datos de Usuario: 

Usuario: <?php echo $user['User']['username'] . "\r"; ?>
Contraseña: <?php echo $pass . "\r\r"; ?>
Razon Social: <?php echo $gimnasio['Gimnasio']['razonsocial'] . "\r"; ?>
Direccion: <?php echo $gimnasio['Gimnasio']['direccion'] . "\r"; ?>
Telefono: <?php echo $gimnasio['Gimnasio']['telefono'] . "\r"; ?>




Gracias por confiar en nuestra Aplicacion!

-GymApp
