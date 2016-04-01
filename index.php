<?php

	require 'libs/flight/Flight.php';
	include 'controller/controller.php';
	include 'controller/functions.php';

	session_start();

	//rutas
	Flight::map('notFound',array('Controller','notFound'));;
	Flight::route('/', array('Controller','index'));
	Flight::route('/account', array('Controller','account'));
	Flight::route('/login', array('Controller','login'));	
	Flight::route('/adduser', array('Controller','adduser'));	

	
	Flight::route('POST /@email/account', function($email){
		Flight::render('account');
	});

	Flight::route('/get/@email/@password', function($email, $password){
		if($email == "" && $password == ""){
			Functions::show('');				
		}else{
			if(Controller::getUser($email, $password) == 1){
				Functions::show(Controller::getUser($email, $password));
			}else{
				Functions::show(Controller::getUser($email, $password));
			}
		}
	});

	Flight::start();
	
?>
