<?php
include "koneksi.php";
	$id_skck = $_POST['id_skck'];
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$status_perkawinan = $_POST['status_perkawinan'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	

		{
		

//echo "UPDATE barang set type_barang='$type_barang',id_ketegori='$id_kategori',ulasan='$ulasan',merk='$merk',berat='$berat',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_barang='$id_barang'";
			
			mysqli_query($koneksi,"UPDATE tbl_skck set nama='$nama',nik='$nik',jenis_kelamin='$jenis_kelamin'
			,tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',status_perkawinan='$status_perkawinan', kewarganegaraan='$kewarganegaraan', agama='$agama',
			pekerjaan='$pekerjaan',alamat='$alamat' where id_skck='$id_skck'")or die(mysqli_error());
		
			echo "<script>
				window.location='index.php?module=skck';
			</script>";
		}
	
?>