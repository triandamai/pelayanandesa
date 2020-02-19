        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12"
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
	?>
		<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
	TAMBAH SKTM
	</div>
	<form method="post" class="form-group" action="tambah_sktm.php" enctype="multipart/form-data" style="margin-top:20px;">
		<input type="text" name="nama" placeholder="Nama" class="form-control"><br>
		<input type="text" name="nik" placeholder="NIK" class="form-control"><br>
		<input type="text" name="tmp_lahir" placeholder="Tempat Lahir" class="form-control"><br>
		<input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control"><br>
		<input type="text" name="kewarganegaraan" placeholder="Kewarganegaraan" class="form-control"><br>
		</td><td><select name="agama"  placeholder="Agama" class="form-control">
			<option value="pilih">--Agama--</option>
			<option value="Islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha">Buddha</option>
		</select></td></tr><br>
		<input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control"><br>
		<input type="text" name="alamat" placeholder="Alamat" class="form-control"><br>
		<input type="text" name="keperluan" placeholder="Keperluan" class="form-control"><br>
		<input type="text" name="keterangan" placeholder="Keterangan" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn btn-success"><br>

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