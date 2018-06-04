<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotel_gilang";
$konek = new mysqli($host, $username, $password, $db_name);

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$id_cs = $_POST['id_customer'];
$nama_cs = $_POST['nama_customer'];
$alamat_cs = $_POST['alamat_customer'];
$no_telfon = $_POST['no_telfon'];
$jk = $_POST['jk'];

$sql = "UPDATE customer SET nama_customers='$nama_cs',jk='$jk',no_telfon='$no_telfon',alamat_customer='$alamat_cs' WHERE id_customer='$id_cs";
if($konek->query($sql)){
  echo "Data Customer yang BERHASIL diedit!<br/>";
}else{
  echo "Data Customer yang GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_customer.php'>Daftar Customer</a>";
?>
