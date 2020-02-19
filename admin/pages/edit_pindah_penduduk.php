        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SURAT KETERANGAN PINDAH PENDUDUK</h1>
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
$edit=mysqli_query($koneksi,"SELECT * FROM tbl_pindah_penduduk WHERE id_pindah_penduduk='$e'")or die(mysqli_error());
$book = mysqli_fetch_array($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
EDIT SURAT KETERANGAN PINDAH PENDUDUK
</div>
<form action="?module=e_pindah_penduduk" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_pindah_penduduk" class="form-control" value =" <?php  echo $book['id_pindah_penduduk'];?>">
<p><b>Dengan ini menerangkan bahwa :</b></p>
 		<b>Nama :</b> <input type="text" name="nama" class="form-control" value =" <?php  echo $book['nama'];?>" ><br>
		<b>NIK : </b><input type="text" name="nik" class="form-control" value =" <?php  echo $book['nik'];?>" ><br>
		<b>Nomer Kartu Keluarga : </b><input type="text" name="no_kk" class="form-control" value =" <?php  echo $book['no_kk'];?>"><br>
		<b>Nama Kepala Keluarga : </b><input type="text" name="nama_kepala_keluarga" class="form-control" value =" <?php  echo $book['nama_kepala_keluarga'];?>"><br>
		<b>Alamat Sekarang : </b><input type="text" name="alamat_sekarang" class="form-control" value =" <?php  echo $book['alamat_sekarang'];?>" ><br>
 		<b>Alamat Pindah : </b><input type="text" name="alamat_pindah" class="form-control" value =" <?php  echo $book['alamat_pindah'];?>" ><br>
		<b>Jumlah Anggota Yang Pindah : </b><input type="text" name="jml_anggota_pindah" class="form-control" value =" <?php  echo $book['jml_anggota_pindah'];?>"><br>
		<td><input type="submit" class="btn btn-success" value="Simpan">
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