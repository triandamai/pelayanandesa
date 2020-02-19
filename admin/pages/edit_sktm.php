        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SKTM</h1>
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
$edit=mysqli_query($koneksi,"SELECT * FROM tbl_sktm WHERE id_sktm='$e'")or die(mysqli_error());
$book = mysqli_fetch_array($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
EDIT SKTM
</div>
<form action="?module=e_sktm" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_sktm" class="form-control" value =" <?php  echo $book['id_sktm'];?>">
		
 		<b>Nama :</b> <input type="text" name="nama" class="form-control" value =" <?php  echo $book['nama'];?>" ><br>
		<b>NIK : </b><input type="text" name="nik" class="form-control" value =" <?php  echo $book['nik'];?>" ><br>	
		<b>Tempat Lahir : </b><input type="text" name="tmp_lahir" class="form-control" value =" <?php  echo $book['tmp_lahir'];?>"><br>
		<b>Tanggal Lahir : </b><input type="date" name="tgl_lahir" class="form-control" value =" <?php  echo $book['tgl_lahir'];?>"><br>
 		<b>kewarganegaraan : </b><input type="text" name="kewarganegaraan" class="form-control" value =" <?php  echo $book['kewarganegaraan'];?>"><br>
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
		<b>Keperluan : </b><input type="text" name="keperluan" class="form-control" value =" <?php  echo $book['keperluan'];?>" ><br>
		<b>Keterangan : </b><input type="text" name="keterangan" class="form-control" value =" <?php  echo $book['keterangan'];?>" ><br>
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