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
		
			
			mysqli_query($koneksi,"INSERT into tbl_pemohon_kk set nama='$nama',jenis_kelamin='$jenis_kelamin'
			,tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',nik='$nik',status_perkawinan='$status_perkawinan', agama='$agama',
			pekerjaan='$pekerjaan',alamat='$alamat', keperluan='$keperluan', keterangan='$keterangan'");
			echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=pemohon_kk';
				</script>";
			
		}

	
?>