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
		

//echo "UPDATE barang set type_barang='$type_barang',id_ketegori='$id_kategori',ulasan='$ulasan',merk='$merk',berat='$berat',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_barang='$id_barang'";
			
			mysqli_query($koneksi,"UPDATE tbl_usaha set nama='$nama'
			,tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',
			pekerjaan='$pekerjaan',alamat='$alamat',jenis_usaha='$jenis_usaha'")or die(mysqli_error());
		
			echo "<script>
				window.location='index.php?module=usaha';
			</script>";
		}
	
?>