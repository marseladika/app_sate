<!DOCTYPE html>
<html>
<head>
	<title>Tambah Sate</title>
</head>
<body>
	<h1>Tambah Sate</h1>
	<hr>

	<form action="simpan_sate.php" method="POST">

		<label>Jenis Daging</label><br>
		<input type="text" name="jenis_daging" required><br>

		<label>Jumlah Daging</label><br>
		<input type="text" name=jumlah_daging required><br><br>

		<label>Harga</label><br>
		<input type="text" name="harga"required><br><br>

		<input type="submit" name="simpan" value="Simpan">
	</form>

</body>
</html>