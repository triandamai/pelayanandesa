		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
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
$no = 1;
$qry_sktm_sekolah = mysqli_query($koneksi,"SELECT * from tbl_sktm_sekolah");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>DATA SKTM SEKOLAH</b>
</div>
<a href="?module=input_sktm_sekolah" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH SKTM SEKOLAH</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=input_sktm_sekolah");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Nama</center></th>
	<th style=" background: #E6E6FA;"><center>NIS</center></th>
	<th style=" background: #E6E6FA;"><center>Nama Sekolah</center></th>
	<th style=" background: #E6E6FA;"><center>Tempat Lahir</center></th>
	<th style=" background: #E6E6FA;"><center>Tanggal Lahir</center></th>
	<th style=" background: #E6E6FA;"><center>Alamat Sekolah</center></th>
	<th style=" background: #E6E6FA;"><center>Alamat Rumah</center></th>
	<th style=" background: #E6E6FA;"><center>Nama Ayah</center></th>
	<th style=" background: #E6E6FA;"><center>Nama Ibu</center></th>
	<th style=" background: #E6E6FA;"><center>Alamat Orang tua</center></th>
	<th style=" background: #E6E6FA;"><center>Pekerjaan Orang Tua</center></th>
	<th style=" background: #E6E6FA;"><center>Penghasilan Orang Tua</center></th>
	<th style=" background: #E6E6FA;"><center>Jumlah Tanggungan</center></th>
	<th style=" background: #E6E6FA;"><center>aksi</center></th>
	<?php while($data = mysqli_fetch_array($qry_sktm_sekolah)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><?php echo $data['nis'] ?></td>
	 <td><?php echo $data['nama_sekolah'] ?></td>
	 <td><?php echo $data['tmp_lahir'] ?></td>
	 <td><?php echo $data['tgl_lahir'] ?></td>
	 <td><?php echo $data['alamat_sekolah'] ?></td>
	 <td><?php echo $data['alamat_rumah'] ?></td>
	 <td><?php echo $data['nama_ayah'] ?></td>
	 <td><?php echo $data['nama_ibu'] ?></td>
	 <td><?php echo $data['alamat_orang_tua'] ?></td>
	 <td><?php echo $data['pekerjaan_orang_tua'] ?></td>
	 <td><?php echo $data['penghasilan_orang_tua'] ?></td>
	 <td><?php echo $data['jumlah_tanggungan'] ?></td>
	  <td><a href="?module=edit_sktm_sekolah&id=<?php echo $data['id_sktm_sekolah']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>  <a href="hapus_sktm_sekolah.php?id=<?php echo $data['id_sktm_sekolah']; ?>"><span class="glyphicon glyphicon-trash"></span></a>  <a href="print_sktm_sekolah.php?id=<?php echo $data['id_sktm_sekolah']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
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
          