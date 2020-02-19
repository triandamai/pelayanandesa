        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> SURAT KETERANGAN PINDAH PENDUDUK</h1>
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
$no = 1;
$qry_pindah_penduduk = mysqli_query($koneksi,"SELECT * from tbl_pindah");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b> SURAT KETERANGAN PINDAH PENDUDUK</b>
</div>
<a href="?module=input_pindah_penduduk" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH SURAT KETERANGAN PINDAH PENDUDUK</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=input_pindah_penduduk");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Nama Lengkap</center></th>
	<th style=" background: #E6E6FA;"><center>NIK</center></th>
	<th style=" background: #E6E6FA;"><center>Nomer Kartu Keluarga</center></th>
	<th style=" background: #E6E6FA;"><center>Nama Kepala Keluarga</center></th>
	<th style=" background: #E6E6FA;"><center>Alamat Sekarang</center></th>
	<th style=" background: #E6E6FA;"><center>Alamat Tujuan Pindah</center></th>
	<th style=" background: #E6E6FA;"><center>jumlah Anggota Yang Pindah</center></th>
	<th style=" background: #E6E6FA;"><center>aksi</center></th>
	<?php while($data = mysqli_fetch_array($qry_pindah_penduduk)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><?php echo $data['nik'] ?></td>
	 <td><?php echo $data['no_kk'] ?></td>
	 <td><?php echo $data['nama_kepala_keluarga'] ?></td>
	 <td><?php echo $data['alamat_sekarang'] ?></td>	 
	 <td><?php echo $data['alamat_pindah'] ?></td>
	 <td><?php echo $data['jml_anggota_pindah'] ?></td>
	 <td><a href="?module=edit_pindah_penduduk&id=<?php echo $data['id_pindah_penduduk']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
		 <a href="?module=hapus_pindah_penduduk&id=<?php echo $data['id_pindah_penduduk']; ?>"><span class="glyphicon glyphicon-trash"></span></a>  
		 <a href="print_pindah_penduduk.php?id=<?php echo $data['id_pindah_penduduk']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
	</tr>
	<?php } ?>
</table>
</div>
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