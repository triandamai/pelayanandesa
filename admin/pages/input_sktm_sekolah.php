        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12"
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
	?>
		<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
	TAMBAH SKTM SEKOLAH
	</div>
	<form method="post" class="form-group" action="tambah_sktm_sekolah.php" enctype="multipart/form-data" style="margin-top:20px;">
		<input type="text" name="nama" placeholder="Nama" class="form-control"><br>
		<input type="text" name="nis" placeholder="NIS" class="form-control"><br>
		<input type="text" name="nama_sekolah" placeholder="Nama Sekolah" class="form-control"><br>
		<input type="text" name="tmp_lahir" placeholder="Tempat Lahir" class="form-control"><br>
		<input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control"><br>
		<input type="text" name="alamat_sekolah" placeholder="Alamat Sekolah" class="form-control"><br>
		<input type="text" name="alamat_rumah" placeholder="Alamat Rumah" class="form-control"><br>
		<input type="text" name="nama_ayah" placeholder="Nama Ayah" class="form-control"><br>
		<input type="text" name="nama_ibu" placeholder="Nama Ibu" class="form-control"><br>
		<input type="text" name="alamat_orang_tua" placeholder="Alamat Orang Tua" class="form-control"><br>
		<input type="text" name="pekerjaan_orang_tua" placeholder="Pekerjaan Orang Tua" class="form-control"><br>
		<input type="text" name="penghasilan_orang_tua" placeholder="Penghasilan Orang Tua" class="form-control"><br>
		<input type="text" name="jumlah_tanggungan" placeholder="Jumlah Tanggungan" class="form-control"><br>
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