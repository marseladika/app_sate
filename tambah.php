<?php 
session_start();
if(!isset($_SESSION["username"])) {
	header("Location: login.php");
}
 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Sate</title>
</head>
<body>
<h1> Tambah Sate </h1>
<hr>
<form method="POST" action="simpan.php">
<label> Jenis Daging </label> <br>
<select name="jenis_daging">
	<option value="ayam"> Ayam </option>
	<option value="kambing"> Kambing </option>
	<option value="sapi"> Sapi </option>
</select> <br>
<label> Jumlah Daging </label> <br>
<input type="text" name="jumlah_daging"> <br>
<label> Harga </label> <br>
<input type="text" name="harga"> <br>
<input type="submit" name="simpan" value="Simpan">
</form>
</body>
</html>
