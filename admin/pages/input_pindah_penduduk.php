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
	?>
		<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
	TAMBAH SURAT KETERANGAN PINDAH PENDUDUK
	</div>
	<form method="post" class="form-group" action="tambah_pindah_penduduk.php" enctype="multipart/form-data" style="margin-top:20px;">
		<p><b>Dengan ini menerangkan bahwa :</b></p>
		<input type="text" name="nama" placeholder="Nama" class="form-control"><br>
		<input type="text" name="nik" placeholder="NIK" class="form-control"><br>
		<input type="text" name="no_kk" placeholder="Nomer Kartu Keluarga" class="form-control"><br>
		<input type="text" name="nama_kepala_keluarga" placeholder="Nama Kepala Keluarga" class="form-control"><br>
		<input type="text" name="alamat_sekarang" placeholder="Alamat Sekarang" class="form-control"><br>
		<input type="text" name="alamat_pindah" placeholder="Alamat Tujuan Pindah" class="form-control"><br>
		<input type="text" name="jml_anggota_pindah" placeholder="Jumlah Anggota Yang pindah" class="form-control"><br>
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