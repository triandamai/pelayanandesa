<?php
include "koneksi.php";
$bk=$_GET['id'];
mysqli_query($koneksi,"DELETE FROM tbl_kematian WHERE id_kematian='$bk'")or die(mysqli_error());
echo "<script>alert('Data Sukses Terhapus');
					window.location='index.php?module=kematian';
				</script>";
 ?>