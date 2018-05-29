<!DOCTYPE html>

<html>
<body>
	<?php 
		$servername = "localhost";
		$user = "root";
		$pw = "";
		
		$db = "mydata";
		
		$conection = new mysqli($servername, $user, $pw, $db);
		
		if($conection -> connect_error) {
			die($conection -> connect_error);
		}
		echo "connected <br>";
		
		$sql = "INSERT INTO User (Name, Passwort) VALUES ('Bruce Wayne', '123456')";
		
		if($conection->query($sql) === TRUE){
			echo "registered";
		}else{
			echo "fehler". $conection -> error;
		}
		
		$conection -> close();
	 ?>
</body>
</html>