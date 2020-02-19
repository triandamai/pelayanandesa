<?php

$koneksi = mysqli_connect("localhost","root","","data_layanan");

if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>