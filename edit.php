<?php 
session_start();
if(isset($_SESSION["username"]))  {
include "koneksi.php";
$id = $_GET["id"];
$sql = "SELECT * FROM sate WHERE id = '$id'";
$query = mysqli_query($con, $sql);
while($sate = mysqli_fetch_array($query)) {
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Edit Data</title>
 </head>
 <body>
 <h1> Edit Data</h1>
 <hr>
 <form method="POST" action="update.php">
 <table>
 	<tr> 
 		<input type="hidden" name="id" value="<?= $sate[0]; ?>">
 	</tr>
 	<tr> 
 		<label> Jenis Daging </label> <br>
 		<select name="jenis_daging">
 		<option value="ayam" <?php if($sate[1] == "ayam") {echo "selected = 'selected'";} ?>> Ayam </option>
 		<option value="kambing" <?php if($sate[1] == "kambing") {echo "selected = 'selected'";} ?>> Kambing</option>
 		<option value="sapi" <?php if($sate[1] == "sapi") {echo "selected = 'selected'";} ?>> Sapi </option>
 	</select> </tr><br>
 	<tr>
 		<label> Jumlah Daging </label> <br>
 	 <input type="text" name="jumlah_daging" value="<?= $sate[2]; ?>"></tr>
 	 <tr> <br>
 	 	<label> Harga</label> <br>
 	 	<input type="text" name="harga" value="<?= $sate[3]; ?>">
 	 </tr> <br>
 	 <tr>
 	 	<input type="submit" name="update" value="Update">
 	 </tr>
 </table>
 </form>
 </body>
 </html>

 <?php 
}
}
  ?>