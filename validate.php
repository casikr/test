<?php
    header('Content-type: text/html; charset=utf-8');
	require('MK_class.php');
	$Log = $_POST['login'];
	
	$nowy = new MK();
	$nowy->mk_connect();
	$nowy->mk_validate('Login', $Log);
	
	
	
?>