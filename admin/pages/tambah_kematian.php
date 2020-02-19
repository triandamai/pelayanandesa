<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$pekerjaan = $_POST['pekerjaan'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$tgl_meninggal = $_POST['tgl_meninggal'];
	$tmp_kematian= $_POST['tmp_kematian'];
	$sebab_kematian= $_POST['sebab_kematian'];

		
		{
		
			
			mysqli_query($koneksi,"INSERT into tbl_kematian set nama='$nama',nik='$nik',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',pekerjaan='$pekerjaan', kewarganegaraan='$kewarganegaraan', agama='$agama',
			alamat='$alamat',tgl_meninggal='$tgl_meninggal',tmp_kematian='$tmp_kematian',sebab_kematian='$sebab_kematian'");
			echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=kematian';
				</script>";
			
		}

	
?>