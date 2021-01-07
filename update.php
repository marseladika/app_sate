<?php 
session_start();
include "koneksi.php";
if(isset($_POST["update"]) and isset($_SESSION["username"])) {
	$id = $_POST["id"];
	$jenis_daging = $_POST["jenis_daging"];
	$jumlah_daging = $_POST["jumlah_daging"];
	$harga = $_POST["harga"];
	$sql = "UPDATE sate SET jenis_daging = '$jenis_daging' , jumlah_daging = '$jumlah_daging' , harga = '$harga' WHERE id = '$id'";
	$query = mysqli_query($con,$sql);

	if($query) {
		header("Location: index.php?pesan=berhasilupdate");
	} else {
		header("Location: index.php?pesan=gagalupdate");
	}

} else {
	header("Location: login.php");
}

 ?>