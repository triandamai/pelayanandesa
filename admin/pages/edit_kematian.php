        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SURAT KETERANGAN KEMATIAN</h1>
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
$edit=mysqli_query($koneksi,"SELECT * FROM tbl_kematian WHERE id_kematian='$e'")or die(mysqli_error());
$book = mysqli_fetch_array($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit Surat Keterangan kematian
</div>
<form action="?module=e_kematian" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_kematian" class="form-control" value =" <?php  echo $book['id_kematian'];?>">
		<p><b>Dengan ini menerangkan bahwa :</b></p>
 		<b>Nama :</b> <input type="text" name="nama" class="form-control" value =" <?php  echo $book['nama'];?>" ><br>
		<b>NIK : </b><input type="text" name="nik" class="form-control" value =" <?php  echo $book['nik'];?>" ><br>
		<b>Tempat Lahir : </b><input type="text" name="tmp_lahir" class="form-control" value =" <?php  echo $book['tmp_lahir'];?>"><br>
		<b>Tanggal Lahir : </b><input type="date" name="tgl_lahir" class="form-control" value =" <?php  echo $book['tgl_lahir'];?>"><br>
		<b>Jenis Kelamin : </b><td><select name="jenis_kelamin" class="form-control">
			<?php
				if($book['jenis_kelamin']=='Laki-laki'){
			?>
			<option value="Laki-laki" selected>Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
			<?php }else{ ?>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan" selected>Perempuan</option>
			<?php } ?>
		</select></td></tr><br>		
		<b>Pekerjaan : </b><input type="text" name="pekerjaan" class="form-control" value =" <?php  echo $book['pekerjaan'];?>" ><br>
 		<b>Kewarganegaraan : </b><input type="text" name="kewarganegaraan" class="form-control" value =" <?php  echo $book['kewarganegaraan'];?>"><br>
		<b>Agama : </b><td><select name="agama" class="form-control">
			<?php
				if($book['agama']=='Islam'){
			?>
			<option value="Islam" selected>Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha">Buddha</option>
			<?php 
				}elseif ($book['agama']=='Kristen'){
			?>
			<option value="Islam">Islam</option>
			<option value="kristen" selected>Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha">Buddha</option>
			<?php 
				}elseif ($book['agama']=='Hindu'){
			?>
			<option value="Islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu"  selected>Hindu</option>
			<option value="buddha">Buddha</option>
			<?php 
				}else { ?>
			<option value="Islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha"  selected>Buddha</option>
			<?php } ?>
		</select></td></tr><br>
 		<b>Alamat : </b><input type="text" name="alamat" class="form-control" value =" <?php  echo $book['alamat'];?>" ><br>
		<b>Tanggal Meninggal : </b><input type="date" name="tgl_meninggal" class="form-control" value =" <?php  echo $book['tgl_meninggal'];?>" ><br>
		<b>Tempat Kematian : </b><input type="text" name="tmp_kematian" class="form-control" value =" <?php  echo $book['tmp_kematian'];?>" ><br>
		<b>Sebab Kematian : </b><input type="text" name="sebab_kematian" class="form-control" value =" <?php  echo $book['sebab_kematian'];?>" ><br>
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