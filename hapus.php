<?php 
include "koneksi.php";
session_start();
$id = $_GET["id"];
$sql = "DELETE FROM sate WHERE id = '$id'";
$query = mysqli_query($con, $sql);


if($query) {
	header("Location: index.php?pesan=berhasilhapus");
} else {
	header("Location: index.php?pesan=gagalhapus");
}


 ?>