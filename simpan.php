<?php 
session_start();
include "koneksi.php";
if(isset($_POST["simpan"]) and isset($_SESSION["username"])) {
$jenis_daging = $_POST["jenis_daging"];
$jumlah_daging = $_POST["jumlah_daging"];
$harga	= $_POST["harga"];
$sql = "INSERT INTO sate (jenis_daging, jumlah_daging, harga) values ('$jenis_daging', '$jumlah_daging' , '$harga')";

$query = mysqli_query($con, $sql);

if($query) {
	header("Location: index.php?pesan=berhasiltambahdata");
} else {
	header("Location: index.php?pesan=gagaltambahdata");
}
} else {
	header("Location: login.php");
}


 ?>