<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$agama = $_POST['agama'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	

		{
		

//echo "UPDATE barang set type_barang='$type_barang',id_ketegori='$id_kategori',ulasan='$ulasan',merk='$merk',berat='$berat',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_barang='$id_barang'";
			
			mysqli_query($koneksi,"UPDATE tbl_domisili set nama='$nama',nik='$nik',jenis_kelamin='$jenis_kelamin',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',agama='$agama',kewarganegaraan='$kewarganegaraan',pekerjaan='$pekerjaan',alamat='$alamat'")or die(mysqli_error());
		
			echo "<script>
				window.location='index.php?module=domisili';
			</script>";
		}
	
?>