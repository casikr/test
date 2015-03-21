<?php
    require('MK_class.php');
	
	$nowy = new MK();
	$nowy->mk_connect();
	$nowy->mk_create_tb();
	
	
	$login = $_POST['login'];
	$password = $_POST['password'];
	$nowy->register($login, $password);
	$nowy->mk_show_registered();
	
?>