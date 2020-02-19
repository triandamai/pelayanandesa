<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$nis = $_POST['nis'];
	$nama_sekolah = $_POST['nama_sekolah'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$alamat_sekolah = $_POST['alamat_sekolah'];
	$alamat_rumah = $_POST['alamat_rumah'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$alamat_orang_tua = $_POST['alamat_orang_tua'];
	$pekerjaan_orang_tua = $_POST['pekerjaan_orang_tua'];
	$penghasilan_orang_tua = $_POST['penghasilan_orang_tua'];
	$jumlah_tanggungan = $_POST['jumlah_tanggungan'];
		{
		
			
			mysqli_query($koneksi,"INSERT into tbl_sktm_sekolah set nama='$nama',nis='$nis',nama_sekolah='$nama_sekolah',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',alamat_sekolah='$alamat_sekolah',alamat_rumah='$alamat_rumah',nama_ayah='$nama_ayah',nama_ibu='$nama_ibu',alamat_orang_tua='$alamat_orang_tua',pekerjaan_orang_tua='$pekerjaan_orang_tua',penghasilan_orang_tua='$penghasilan_orang_tua',jumlah_tanggungan='$jumlah_tanggungan'");
			echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=sktm_sekolah';
				</script>";
			
		}

	
?>