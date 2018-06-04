<html>
<head>
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

$sql="select * from customer";
$data=$konek->query($sql);

echo "<a href='index.php'>Kembali ke menu</a>";
echo "<h1>Daftar Customer</h1>";
echo "<table border='1'>";
echo "<tr>
		<td>No</td>
		<td>ID Customer</td>
		<td>Nama Customer</td>
		<td>jenis kelamin</td>
		<td>No Telfon</td>
		<td>Alamat Customer</td>
		<td>tanggal masuk</td>
		<td>Alamat keluar</td>
		<td>jenis kamar</td>
		<td colspan=2>Aksi</td>
	 </tr>";
	 
if($data->num_rows>0){
	$no=1;
	while($row=$data->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$no++."</td>";
		echo "<td>".$row['id_customer']."</td>";
		echo "<td>".$row['nama_customer']."</td>";
		echo "<td>".$row['jk']."</td>";
		echo "<td>".$row['no_telfon']."</td>";
		echo "<td>".$row['alamat_customer']."</td>";
		echo "<td>".$row['tgl_in']."</td>";
		echo "<td>".$row['tgl_out']."</td>";
		echo "<td>".$row['jkm']."</td>";
		echo "<td><a href='formupdate_customer.php?id_customer=".$row['id_customer']."'>Edit</a></td>";
		echo "<td><a href='hapus_customer.php?id_customer=".$row['id_customer']."'>Hapus</a></td>";
		echo "</tr>";
	}
}else{
	echo "Data Kosong!";
}
echo "</table>";

$konek->close();

?>
<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>My Web Page</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
