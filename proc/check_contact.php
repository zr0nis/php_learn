<?php
$contact_list = [
	'username'	=> 3,
	'email'			=> 10,
	'password'	=> 5,
	'massage'		=> 15
	];

	session_start();
	function redirect($location){
		header('Location:../'.$location);
		exit;
	}

	function form_data_save($name){
		$name = trim($name);
		$_SESSION[$name] = $_POST[$name];
	}

	function form_data_valid($name, $min_symbol){
		$name = trim($name);
		if (strlen($_SESSION[$name]) < $min_symbol){
			$_SESSION[$name.'_error_min'] = 'Колличество символов должно быть не меньше '.strval($min_symbol);
			return False;
		}
		else{
			unset($_SESSION[$name.'_error_min']);
			return True;
		}
	}

	$_SESSION['allvalid'] = True;
	foreach($contact_list as $name => $min_symbol){
		form_data_save($name);
		$_SESSION['allvalid'] = $_SESSION['allvalid'] && form_data_valid($name, $min_symbol);
	}
	if ($_SESSION['allvalid'])
		redirect('index.php');

redirect('contact.php');
