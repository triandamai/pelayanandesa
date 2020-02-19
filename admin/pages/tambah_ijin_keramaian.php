<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$agama = $_POST['agama'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$acara = $_POST['acara'];
	$hiburan = $_POST['hiburan'];
	$tgl_keramaian = $_POST['tgl_keramaian'];
	$tmp_acara = $_POST['tmp_acara'];
		
		{
		
			
			mysqli_query($koneksi,"INSERT into tbl_ijin_keramaian set nama='$nama',nik='$nik'
			,tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',kewarganegaraan='$kewarganegaraan',agama='$agama',pekerjaan='$pekerjaan',alamat='$alamat',acara='$acara',hiburan='$hiburan',tgl_keramaian='$tgl_keramaian',tmp_acara='$tmp_acara'");
			echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=ijin_keramaian';
				</script>";
			
		}

	
?>