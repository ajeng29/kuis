<!DOCTYPE html>
<html>
<head>
	<title>Permintaan Surat</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
	<?php
		$nim=$_POST['NIM'];
		$Nama=$_POST['Nama'];
		$jurusan=$_POST['jurusan'];
		$Tempat=$_POST['Tempat'];
		$Tgl=$_POST['Tgl'];
		$Bln=$_POST['Bln'];
		$Thn=$_POST['Thn'];
		$JK=$_POST['JK'];
		$JS=$_POST['JS'];
		$alasan=$_POST['alasan'];

		echo "NIM      : $nim<br>";
		echo "Nama     : $Nama<br>";
		echo "Jurusan  : $jurusan<br>";
		echo "Tempat dan Tanggal Lahir : $Tempat, $Tgl/$Bln/$Thn<br>";
		echo "Jenis Kelamin : $JK<br>";
		echo "Jenis Surat : $JS<br>";
		echo "alasan: $alasan<br>";
	?>
</body>
</html>