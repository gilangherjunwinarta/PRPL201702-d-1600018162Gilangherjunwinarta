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
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotel_gilang";

$konek = new mysqli($host,$username,$password,$db_name);

//mengecek koneksi
if ($konek->connect_error) {
	die("Koneksi gagal karena : ".$konek->connect_error);
}

$id_cs = $_POST['id_customer'];
$nama_cs = $_POST['nama_customer'];
$alamat_cs = $_POST['alamat_customer'];
$no_telp = $_POST['no_telfon'];
$jk = $_POST['jk'];
$tgl_in=$_POST['tgl_in'];
$tgl_out=$_POST['tgl_out'];
$jkm=$_POST['jkm'];

$sql = "INSERT INTO customer(id_customer,nama_customer,jk,no_telfon,alamat_customer,tgl_in,tgl_out,jkm) VALUES ('$id_cs','$nama_cs','$jk','$no_telp','$alamat_cs','$tgl_in','$tgl_out','$jkm')";
if ($konek->query($sql)) {
	echo "Data Customer BERHASIL ditambah!<br/>";
}else{
	echo "Data Customer GAGAL ditambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='tambah_customer.php'>Tambah Data Customer<a/>";
?>