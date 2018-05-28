<!DOCTYPE html>

<html>
<body>
	<?php 
		$error = "";
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty(htmlspecialchars(stripslashes(trim($_POST["name"]))))){
				$error = "Kein Name";
			}elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
				$error = "Ungültige E-Mail";
			}else{
				echo "Hi ". htmlspecialchars(stripslashes(trim($_POST["name"]))).
				"<br> Die E-Mail lautet ". htmlspecialchars(stripslashes(trim($_POST["email"])));
			}
		}
	 ?>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	Name: <input type="text" name="name"> <br>
	E-Mail: <input type="text" name="email"> <br>
	<input type="submit">
	<?php echo $error; ?>
	</form>
</body>
</html>