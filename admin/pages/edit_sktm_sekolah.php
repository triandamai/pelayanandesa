        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SKTM SEKOLAH</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
<?php
include"koneksi.php";
$e=$_GET['id'];
$edit=mysqli_query($koneksi,"SELECT * FROM tbl_sktm_sekolah WHERE id_sktm_sekolah='$e'")or die(mysqli_error());
$book = mysqli_fetch_array($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
EDIT SKTM SEKOLAH
</div>
<form action="?module=e_sktm_sekolah" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_sktm_sekolah" class="form-control" value =" <?php  echo $book['id_sktm_sekolah'];?>">
		
 		<b>Nama :</b> <input type="text" name="nama" class="form-control" value =" <?php  echo $book['nama'];?>" ><br>
		<b>NIS : </b><input type="text" name="nis" class="form-control" value =" <?php  echo $book['nis'];?>" ><br>
		<b>Nama Sekolah : </b><input type="text" name="nama_sekolah" class="form-control" value =" <?php  echo $book['nama_sekolah'];?>" ><br>		
		<b>Tempat Lahir : </b><input type="text" name="tmp_lahir" class="form-control" value =" <?php  echo $book['tmp_lahir'];?>"><br>
		<b>Tanggal Lahir : </b><input type="date" name="tgl_lahir" class="form-control" value =" <?php  echo $book['tgl_lahir'];?>"><br>
 		<b>Alamat Sekolah : </b><input type="text" name="alamat_sekolah" class="form-control" value =" <?php  echo $book['alamat_sekolah'];?>"><br>
		<b>Alamat Rumah : </b><input type="text" name="alamat_rumah" class="form-control" value =" <?php  echo $book['alamat_rumah'];?>" ><br>
		<b>Nama Ayah : </b><input type="text" name="nama_ayah" class="form-control" value =" <?php  echo $book['nama_ayah'];?>" ><br>
 		<b>Nama Ibu : </b><input type="text" name="nama_ibu" class="form-control" value =" <?php  echo $book['nama_ibu'];?>" ><br>
		<b>Alamat Orang Tua : </b><input type="text" name="alamat_orang_tua" class="form-control" value =" <?php  echo $book['alamat_orang_tua'];?>" ><br>
		<b>Pekerjaan Orang Tua : </b><input type="text" name="pekerjaan_orang_tua" class="form-control" value =" <?php  echo $book['pekerjaan_orang_tua'];?>" ><br>
		<b>Penghasilan Orang Tua : </b><input type="text" name="penghasilan_orang_tua" class="form-control" value =" <?php  echo $book['penghasilan_orang_tua'];?>" ><br>
		<b>Jumlah Tanggungan : </b><input type="text" name="jumlah_tanggungan" class="form-control" value =" <?php  echo $book['jumlah_tanggungan'];?>" ><br>
		<td><input type="submit" class="btn btn-success" value="simpan">
</form>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
               
                <!-- /.col-lg-6 -->
            
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->