<?php

$konek = new mysqli("localhost","root","","prplhotel");


if ($konek->connect_error) {
	die("koneksi gagal karena : ".$konek->connect_error);
}
//buat tabel customer
$sql = "create table customer (id_customer varchar(15) not null primary key,nama_customer varchar(50),tgl_lahir varchar(20),no_telfon varchar(20),alamat_customer varchar(200),cek_in varchar(30),cek_out varcahar(30),jkm varchar(30))";

if ($konek->query($sql)) {
			echo "Table customer berhasil dibuat</br>";
		}
		else{
			echo "Table customer tidak berhasil dibuat karena :" .$konek->error."</br>";
		}
//buat tabel kamar
$sql = "create table kamar(kd_kamar varchar(15) not null primary key,kd_kategori varchar(50),nama_kamar varchar(20),lokasi_lantai varchar(2),keterangan varchar(30)) ";

if ($konek->query($sql)) {
			echo "Table kamar berhasil dibuat</br>";
		}
		else{
			echo "Table kamar tidak berhasil dibuat karena :" .$konek->error."</br>";
		}


				$konek->close();

?>