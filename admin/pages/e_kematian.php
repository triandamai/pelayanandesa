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
		

//echo "UPDATE barang set type_barang='$type_barang',id_ketegori='$id_kategori',ulasan='$ulasan',merk='$merk',berat='$berat',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_barang='$id_barang'";
			
			mysqli_query($koneksi,"UPDATE tbl_kematian set nama='$nama',nik='$nik',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',pekerjaan='$pekerjaan', kewarganegaraan='$kewarganegaraan', agama='$agama',
			alamat='$alamat',tgl_meninggal='$tgl_meninggal',tmp_kematian='$tmp_kematian',sebab_kematian='$sebab_kematian'")or die(mysqli_error());
		
			echo "<script>
				window.location='index.php?module=kematian';
			</script>";
		}
	
?>