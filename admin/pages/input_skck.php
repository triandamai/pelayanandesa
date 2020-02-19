        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Surat Keterangan Catatan Kepolisian</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                            
				<?php
				include"koneksi.php";
				$qry_skck = mysqli_query($koneksi,"SELECT * from tbl_kk ");

				// menangkap data yang di kirim dari form
				// $nama = $_POST['nama'];
				// $nim = $_POST['nim'];
				// $alamat = $_POST['alamat'];
 
				// menginput data ke database
				//mysqli_query($koneksi,"INSERT INTO tbl_skck values('','$nama','$nim','$alamat')");
 
				// mengalihkan halaman kembali ke index.php
			//	header("location:index.php");
				?>
		<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
			Tambah Surat Keterangan Catatan Kepolisian
		</div>
		<form method="post" class="form-group" action="tambah_skck.php" enctype="multipart/form-data" style="margin-top:20px;">
				<p>
					<b>Dengan ini menerangkan bahwa :</b>
				</p>
			<td>
				<select name="nik" placeholder="Jenis Kelamin" class="form-control">
				<option value="pilih">--Pilih Nik--</option>
					<?php while($d = mysqli_fetch_array($qry_skck)){
					?>
					<option value="<?php echo $d['id_kk']; ?>"><?php echo $d['nik']; ?></option>
				<?php }?>
				</select>
			</td>
			<br>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success"><br>
		</form>
			</div>
        </div>
    </div>
</div>