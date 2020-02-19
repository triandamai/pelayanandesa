<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$no_kk = $_POST['no_kk'];
	$nama_kepala_keluarga = $_POST['nama_kepala_keluarga'];
	$alamat_sekarang = $_POST['alamat_sekarang'];
	$alamat_pindah = $_POST['alamat_pindah'];
	$jml_anggota_pindah = $_POST['jml_anggota_pindah'];
	
		
		{
		
			
			mysqli_query($koneksi,"INSERT into tbl_pindah_penduduk set nama='$nama',nik='$nik',no_kk='$no_kk',nama_kepala_keluarga='$nama_kepala_keluarga',alamat_sekarang='$alamat_sekarang',alamat_pindah='$alamat_pindah',
			jml_anggota_pindah='$jml_anggota_pindah'");
			echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=pindah_penduduk';
				</script>";
			
		}

	
?>