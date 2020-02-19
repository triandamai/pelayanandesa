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
		

//echo "UPDATE barang set type_barang='$type_barang',id_ketegori='$id_kategori',ulasan='$ulasan',merk='$merk',berat='$berat',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_barang='$id_barang'";
			
			mysqli_query($koneksi,"UPDATE tbl_menikah set nama='$nama',jenis_kelamin='$jenis_kelamin'
			,tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir', kewarganegaraan='$kewarganegaraan', agama='$agama',
			pekerjaan='$pekerjaan',alamat='$alamat',bin_binti='$bin_binti',stts_perkawinan='$stts_perkawinan',nm='$nm'")or die(mysqli_error());
		
			echo "<script>
				window.location='index.php?module=menikah';
			</script>";
		}
	
?>