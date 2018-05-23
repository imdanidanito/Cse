<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>logn form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="error">
		<span>Datos incorrector</span>
	</div>
	<form action="login.php" method="post">
	<fieldset>
		<legend>login</legend>
			<input type="text" name="email" id="email" placeholder="User" autofocus="on" required="">
			<input type="password" name="p" id="password" placeholder="password">
			<input type="submit" class="botonlg" value="login">
	</fieldset>
	</form>
</body>
</html>