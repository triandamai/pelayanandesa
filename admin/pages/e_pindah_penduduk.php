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
		

//echo "UPDATE barang set type_barang='$type_barang',id_ketegori='$id_kategori',ulasan='$ulasan',merk='$merk',berat='$berat',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_barang='$id_barang'";
			
			mysqli_query($koneksi,"UPDATE tbl_pindah_penduduk set nama='$nama',nik='$nik',no_kk='$no_kk',nama_kepala_keluarga='$nama_kepala_keluarga',alamat_sekarang='$alamat_sekarang',alamat_pindah='$alamat_pindah',
			jml_anggota_pindah='$jml_anggota_pindah'")or die(mysqli_error());
		
			echo "<script>
				window.location='index.php?module=pindah_penduduk';
			</script>";
		}
	
?>