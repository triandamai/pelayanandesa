<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$bin_binti = $_POST['bin_binti'];
	$stts_perkawinan = $_POST['stts_perkawinan'];
	$nm = $_POST['nm'];
		
		{
		
			
			mysqli_query($koneksi,"INSERT into tbl_menikah set nama='$nama',jenis_kelamin='$jenis_kelamin'
			,tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir', kewarganegaraan='$kewarganegaraan', agama='$agama',
			pekerjaan='$pekerjaan',alamat='$alamat',bin_binti='$bin_binti',stts_perkawinan='$stts_perkawinan',nm='$nm'");
			echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=menikah';
				</script>";
			
		}

	
?>