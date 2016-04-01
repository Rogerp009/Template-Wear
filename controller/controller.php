<?php

	require 'model/medoo.php';

	class Controller{
		
		//metodos
		public static function index(){
			Flight::render('index');
		}

		public static function login(){
			Flight::render('login');
		}		

		public static function notFound(){
			Flight::render('404');
		}		

		public static function account(){
			Flight::render('account');
		}	

		public static function adduser(){
			$user = $database->insert('user',[
				'nombre' => $user[0],
				'apellido' => $user[1],
				'cedula' => $user[2],
				'email' => $user[3],
				'password' => $user[4]
			]);
		}		
		public static function getUser($email, $password){
			$database = new medoo();
			return $database->select("user","email", ["AND" => ["email" => $email, "password" => $password]]);
		}				
	}//endClass

?>