<!DOCTYPE html>
<html>
<head>
	<title>HOTEL GILANG</title>
	<style type="text/css">
	body{
			background-size:cover;
	}
	</style>
</head>
<body style="background-image:url(aa.jpg)" background-size:cover>
<table align="left" border="0" cellpadding="5" width="100%" style="background-color: #fff000;">
<tr style="font-size:20">
<td width="30" style="text-align"><a href="tambah_customer.php" target="self">Reservasi</a></td>
<td width="30" style="text-align"><a href="tampil_kamar.php" target="self">Kamar</a></td>
<td width="30" style="text-align"><a href="tampil_customer.php" target="self">Customer</a></td>

</tr>
</table>
</body>
</html>
<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotel_gilang";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$id_customer = $_GET['id_customer'];

$sql = "DELETE FROM customer WHERE id_customer='$id_customer'";
if($konek->query($sql)){
  echo "Data Customer BERHASIL dihapus!<br/>";
}else{
  echo "Data Customer GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_customer.php'>Daftar Customer</a>";
?>
