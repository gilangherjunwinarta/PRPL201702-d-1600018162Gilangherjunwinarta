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
	
	<h1>Tambah Customer</h1>
	<form action="simpan_customer.php" method="post">
		<table>
			<tr>
				<td>ID Customer</td>
				<td>:</td>
				<td><input type="text" name="id_customer" required></td>
			</tr>
			<tr>
				<td>Nama Customer</td>
				<td>:</td>
				<td><input type="text" name="nama_customer" required></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="laki-laki" required>laki-laki</td>
				<td><input type="radio" name="jk" value="perempuan" required>perempuan</td>
			</tr>
			<tr>
				<td>No Telfon</td>
				<td>:</td>
				<td><input type="text" name="no_telfon" required></td>
			</tr>
			<tr>
				<td>Alamat Customer</td>
				<td>:</td>
				<td><textarea name="alamat_customer" rows="8" cols="40" required></textarea></td>
			</tr>
			<tr>
				<td>tanggal masuk</td>
				<td>:</td>
				<td><input type="date" name="tgl_in" placeholder="" required></textarea></td>
			</tr>
			<tr>
				<td>tanggal keluar</td>
				<td>:</td>
				<td><input type="date" name="tgl_out" placeholder="" required></textarea></td>
			</tr>
			<tr>
				<td>jenis kamar</td>
				<td>:</td>
				<td><input type="radio" name="jkm" value="ekonomi" required>ekonomi</td>
				<td><input type="radio" name="jkm" value="vip" required>vip</td>
				<td><input type="radio" name="jkm" value="vvip" required>vvip</td>
			</tr>
			<tr>
				<td>total biaya</td>
				<td>:</td>
				<td><input type="text" name="tgl_out" placeholder="" required></textarea></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>