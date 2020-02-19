<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$jenis_usaha = $_POST['jenis_usaha'];

		
		{
		
			
			mysqli_query($koneksi,"INSERT into tbl_usaha set nama='$nama'
			,tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',
			pekerjaan='$pekerjaan',alamat='$alamat',jenis_usaha='$jenis_usaha'");
			echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=usaha';
				</script>";
			
		}

	
?>