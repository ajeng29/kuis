<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
	session_start();
	session_destroy();

	echo"Anda behasil logout";
?>

		<p>Silahkan Login kembali di
		<a href = "login.html">Halaman Login</a></p>
</body>
</html>