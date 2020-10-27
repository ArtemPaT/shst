<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'project1');
	mysqli_query($con_bd, "INSERT INTO tovari(name, text, price, img) VALUES ('{$_GET['name']}', '{$_GET['text']}', '{$_GET['price']}', '{$_GET['img']}')"); //почему
	header('Location: index.php');
 ?>