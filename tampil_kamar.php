<html>
<head>
<style type="text/css">
	body{
			background-size:cover;
	}
	</style>
<body>
<link rel="stylesheet" type="text/css" href="p.css">
<meta charset="UTF-8">

</head>
<center>
<body style="background-image:url(aa.jpg)">
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
$host="localhost";
$username="root";
$password = "";
$db_name = "hotel_gilang";

$konek = new mysqli($host,$username,$password,$db_name);

//mengecek koneksi
if ($konek->connect_error) {
	die("Koneksi gagal karena : ".$konek->connect_error);
}

$sql="select * from kamar";
$data=$konek->query($sql);

echo "<a href='index.php'>Kembali ke menu</a>";
echo "<h1>Daftar Kamar</h1>";
echo "<table border='1'>";
echo "<tr>
		<td>No</td>
		<td>Kode Kamar</td>
		<td>Kode Kategori</td>
		<td>Nama Kamar</td>
		<td>Lokasi Lantai</td>
		<td>Keterangan</td>
		<td colspan=2>Aksi</td>
	 </tr>";
	 
if($data->num_rows>0){
	$no=1;
	while($row=$data->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$no++."</td>";
		echo "<td>".$row['kd_kamar']."</td>";
		echo "<td>".$row['kd_kategori']."</td>";
		echo "<td>".$row['nama_kamar']."</td>";
		echo "<td>".$row['lokasi_lantai']."</td>";
		echo "<td>".$row['keterangan']."</td>";
		echo "<td><a href='formupdate_kamar.php?kd_kamar=".$row['kd_kamar']."'>Edit</a></td>";
		echo "<td><a href='hapus_kamar.php?kd_kamar=".$row['kd_kamar']."'>Hapus</a></td>";
		echo "</tr>";
	}
}else{
	echo "Data Kosong!";
}
echo "</table>";

$konek->close();

?>