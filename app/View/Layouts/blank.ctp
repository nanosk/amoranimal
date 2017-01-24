<html>
<head>
<meta name="viewport" content="width=device-width, minimum-scale=0.1">
<?php 
echo $this->Html->meta(
    'favicon.ico',
    '/favicon.ico',
    array('type' => 'icon')
);
?>

</head>

<body>
<?php echo $this->fetch('content')?>
</body>
</html>