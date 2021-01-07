<?php

session_start();
include "koneksi.php";

$sql = "SELECT * FROM sate";
$query = mysqli_query($con, $sql);
if (isset($_SESSION ['username'])){
	$username = $_SESSION['username'];

}else{
	header("Location: login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Sate</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Data Sate</h1>
	<hr>
	<a href="tambahsate.php"><button class="tambah">Tambah Sate</button></a><br><br>


	<table border="1">
		<tr>
			<th>ID</th>
			<th>Judul Daging</th>
			<th>Jumlah Daging</th>
			<th>Harga</th>
			<th class="edit">Aksi</th>
		</tr>


		<?php
			while($sate = mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td>".$sate[0]. "</td>";
			echo "<td>".$sate[1]."</td>";
			echo "<td>".$sate[2]."</td>";
			echo "<td>".$sate[3]."</td>";
			echo "<td class='edit'><a href='editsate.php?id=$sate[0]'>Edit</a>; |
			<a href='deletesate.php?id=$sate[0]'>Hapus</a></td>";
			echo "</tr>";

			}
		?>

</table>




</body>
</html>
<br><button class="cetak" onclick="window.print()">Cetak</button><br>
<button><a href="proses_logout.php" class="logout">Logout</a></button><br>