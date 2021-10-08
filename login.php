<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
	<?php
	include "koneksi.php";

	$username= $_POST['username'];
	$password= ($_POST['password']);


	$sql = "SELECT * FROM  user WHERE username='$username' and password='$password'";
	$result = mysqli_query($connect, $sql);
	$cek = mysqli_num_rows($result);

	if($cek>0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] ='login';
		?>
		Anda berhasil Login, silahkan menuju
		<a href="home.html">Halaman Home</a> 
		<?php
	}else{
		?>
		Gagal login, silahkan login lagi.
		<a href = "login.html">Halaman Login</a>
	<?php
	echo mysqli_error($connect);
	}
	?>
</body>
</html>