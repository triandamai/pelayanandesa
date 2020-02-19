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
		

//echo "UPDATE barang set type_barang='$type_barang',id_ketegori='$id_kategori',ulasan='$ulasan',merk='$merk',berat='$berat',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_barang='$id_barang'";
			
			mysqli_query($koneksi,"UPDATE tbl_sktm_sekolah set nama='$nama',nis='$nis',nama_sekolah='$nama_sekolah',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',alamat_sekolah='$alamat_sekolah',alamat_rumah='$alamat_rumah',nama_ayah='$nama_ayah',nama_ibu='$nama_ibu',alamat_orang_tua='$alamat_orang_tua',pekerjaan_orang_tua='$pekerjaan_orang_tua',penghasilan_orang_tua='$penghasilan_orang_tua',jumlah_tanggungan='$jumlah_tanggungan'")or die(mysqli_error());
		
			echo "<script>
				window.location='index.php?module=sktm_sekolah';
			</script>";
		}
	
?>