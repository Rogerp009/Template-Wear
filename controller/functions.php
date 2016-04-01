<?php  
	class Functions {
		
		public static function show($texto){
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($texto);
		}
	}
?>