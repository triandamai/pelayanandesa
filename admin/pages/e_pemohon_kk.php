<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$nik = $_POST['nik'];
	$status_perkawinan = $_POST['status_perkawinan'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$keperluan = $_POST['keperluan'];
	$keterangan = $_POST['keterangan'];
	

		{
		

//echo "UPDATE barang set type_barang='$type_barang',id_ketegori='$id_kategori',ulasan='$ulasan',merk='$merk',berat='$berat',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_barang='$id_barang'";
			
			mysqli_query($koneksi,"UPDATE tbl_pemohon_kk set nama='$nama',jenis_kelamin='$jenis_kelamin'
			,tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',nik='$nik',status_perkawinan='$status_perkawinan', agama='$agama',
			pekerjaan='$pekerjaan',alamat='$alamat', keperluan='$keperluan', keterangan='$keterangan'")or die(mysqli_error());
		
			echo "<script>
				window.location='index.php?module=pemohon_kk';
			</script>";
		}
	
?>