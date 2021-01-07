<?php
include "koneksi.php";

if (isset($_POST['update'])){
	
	$id = $_POST['id'];
	$jenis_daging = $_POST['jenis_daging'];
	$jumlah_daging = $_POST['jumlah_daging'];
	$harga = $_POST['harga'];

	$sql = "UPDATE sate SET jenis_daging = '$jenis_daging', jumlah_daging = '$jumlah_daging' , harga = '$harga' WHERE id = '$id'";
	$query = mysqli_query($con, $sql);

	if ($query){
		header("Location: index.php?update=sukses");
	}else{
		echo "gagal bro";
	}

}else{
	header("Location: index.php?pesan=adapenyusup");
}

?>