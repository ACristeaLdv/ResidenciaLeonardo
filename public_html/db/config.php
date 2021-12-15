<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id18124629_leoresi');
   define('DB_PASSWORD', 'Residencialeonardo1.');
   define('DB_DATABASE', 'id18124629_resileo');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   mysqli_set_charset($conn, "utf8");
   
   if (!$conn) {
		die("Error conexión con la BBDD: " . mysqli_connect_error());
	}
  
?>