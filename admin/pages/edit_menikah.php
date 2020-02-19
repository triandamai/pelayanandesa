        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SURAT KETERANGAN UNTUK MENIKAH</h1>
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
$edit=mysqli_query($koneksi,"SELECT * FROM tbl_menikah WHERE id_menikah='$e'")or die(mysqli_error());
$book = mysqli_fetch_array($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
EDIT SURAT KETERANGAN UNTUK MENIKAH
</div>
<form action="?module=e_menikah" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_menikah" class="form-control" value =" <?php  echo $book['id_menikah'];?>">
<p><b>Yang bertanda tangan di bawah ini Kepala Desa Lumbir Kecamatan Lumbir dengan ini menerangkan bahwa :</b></p>
 		<b>Nama :</b> <input type="text" name="nama" class="form-control" value =" <?php  echo $book['nama'];?>" ><br>
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
		<b>Tempat Lahir : </b><input type="text" name="tmp_lahir" class="form-control" value =" <?php  echo $book['tmp_lahir'];?>"><br>
		<b>Tanggal Lahir : </b><input type="date" name="tgl_lahir" class="form-control" value =" <?php  echo $book['tgl_lahir'];?>"><br>
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
		<b>Pekerjaan : </b><input type="text" name="pekerjaan" class="form-control" value =" <?php  echo $book['pekerjaan'];?>" ><br>
 		<b>Alamat : </b><input type="text" name="alamat" class="form-control" value =" <?php  echo $book['alamat'];?>" ><br>
		<b>Bin / BInti : </b><input type="text" name="bin_binti" class="form-control" value =" <?php  echo $book['bin_binti'];?>" ><br>
		<b>Status Perkawinan : </b><td><select name="stts_perkawinan" class="form-control">
			<?php
				if($book['stts_perkawinan']=='Perawan'){
			?>
			<option value="perawan">Perawan</option>
			<option value="jejaka">Jejaka</option>
			<option value="janda">Janda</option>
			<option value="duda">Duda</option>
			<?php 
				}elseif ($book['stts_perkawinan']=='Jejaka'){
			?>
			<option value="perawan">Perawan</option>
			<option value="jejaka">Jejaka</option>
			<option value="janda">Janda</option>
			<option value="duda">Duda</option>
			<?php 
				}elseif ($book['stts_perkawinan']=='Janda'){
			?>
			<option value="perawan">Perawan</option>
			<option value="jejaka">Jejaka</option>
			<option value="janda">Janda</option>
			<option value="duda">Duda</option>
			<?php 
				}else { ?>
			<option value="perawan">Perawan</option>
			<option value="jejaka">Jejaka</option>
			<option value="janda">Janda</option>
			<option value="duda">Duda</option>
			<?php } ?>
		</select></td></tr><br>
		<b>Nama isteri/suami Terdahulu : </b><input type="text" name="nm" class="form-control" value =" <?php  echo $book['nm'];?>" ><br>
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