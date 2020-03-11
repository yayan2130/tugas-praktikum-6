<!DOCTYPE html>
<html>
<head>
	<title>BUKU TAMU</title>
</head>
<body>
	<h1 align="center">BUKU TAMU</h1>
	<p align="center">Silahkan mengisi buku tamu dibawah</p>
	<form method="POST" action="submit.php">
		<p align="center">Nama Lengkap : <br><br> <input type="text" name="nama"></p>
		<p align="center">Email : <br><br> <input type="text" name="email"></p>
		<p align="center">Isi : <br><br> <textarea name="isi"></textarea></p>
		<p align="center">
			<input type="submit" name="submit" value="kirim"> 
			<input type="reset" name="reset" value="ulang">
		</p>
	</form>
</body>
</html>