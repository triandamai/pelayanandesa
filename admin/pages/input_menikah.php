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
	?>
		<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
	TAMBAH SURAT KETERANGAN UNTUK MENIKAH
	</div>
	<form method="post" class="form-group" action="tambah_menikah.php" enctype="multipart/form-data" style="margin-top:20px;">
	<p><b>Yang bertanda tangan di bawah ini Kepala Desa Lumbir Kecamatan Lumbir dengan ini menerangkan bahwa :</b></p>
		<input type="text" name="nama" placeholder="Nama" class="form-control"><br>
		<td><select name="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control">
			<option value="pilih">--Jenis Kelamin--</option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select></td></tr><br>
		<input type="text" name="tmp_lahir" placeholder="Tempat Lahir" class="form-control"><br>
		<input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control"><br>
		<input type="text" name="kewarganegaraan" placeholder="Kewarganegaraan" class="form-control"><br>
		</td>
		<td><select name="agama"  placeholder="Agama" class="form-control">
			<option value="pilih">--Agama--</option>
			<option value="Islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha">Buddha</option>
		</select></td></tr><br>
		<input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control"><br>
		<input type="text" name="alamat" placeholder="Alamat" class="form-control"><br>
		<input type="text" name="bin_binti" placeholder="Bin / Binti" class="form-control"><br>
		<td><select name="stts_perkawinan"  placeholder="Status Perkawinan" class="form-control">
			<option value="pilih">--Status Perkawinan--</option>
			<option value="perawan">Perawan</option>
			<option value="jejaka">Jejaka</option>
			<option value="janda">Janda</option>
			<option value="duda">Duda</option>
		</select></td></tr><br>
		<input type="text" name="nm" placeholder="Nama isteri/suami Terdahulu" class="form-control"><br>

		<input type="submit" name="simpan" value="Simpan" class="btn btn-success"><br>

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