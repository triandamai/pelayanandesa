<?php
include "koneksi.php";
$bk=$_GET['id'];
mysqli_query($koneksi,"DELETE FROM tbl_ijin_keramaian WHERE id_ijin_keramaian='$bk'")or die(mysqli_error());
echo "<script>alert('Data Sukses Terhapus');
					window.location='index.php?module=ijin_keramaian';
				</script>";
 ?>