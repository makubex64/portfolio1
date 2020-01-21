<?php


$host = 'localhost';
$user = 'root';
$password = '';
$data_base = 'crudnodemysql';
$conn;


$conn = new mysqli($host,$user,$password,$data_base);
		if ($conn->connect_error) {
			echo "error de conexion ($conn->connect_error)
			$conn->connect_error\n";
		}else{
			// echo '<p class="text-info">Bienvenido...</p>';
			return $conn;
		}
	



