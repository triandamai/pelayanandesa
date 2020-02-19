<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$keperluan = $_POST['keperluan'];
	$keterangan = $_POST['keterangan'];
		{
		
			
			mysqli_query($koneksi,"INSERT into tbl_sktm set nama='$nama',nik='$nik',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',kewarganegaraan='$kewarganegaraan',agama='$agama',pekerjaan='$pekerjaan',alamat='$alamat',keperluan='$keperluan',keterangan='$keterangan'");
			echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=sktm';
				</script>";
			
		}

	
?>