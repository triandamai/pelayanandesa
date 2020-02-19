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
		
			
			mysqli_query($koneksi,"INSERT into tbl_domisili set nama='$nama',nik='$nik',jenis_kelamin='$jenis_kelamin'
			,tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir', agama='$agama',kewarganegaraan='$kewarganegaraan',
			pekerjaan='$pekerjaan',alamat='$alamat'");
			echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=domisili';
				</script>";
			
		}

	
?>