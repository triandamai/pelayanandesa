        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> SURAT KETERANGAN UNTUK MENIKAH</h1>
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
$qry_menikah = mysqli_query($koneksi,"SELECT * from tbl_nikah");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b> DATA SURAT KETERANGAN UNTUK MENIKAH</b>
</div>
<a href="?module=input_menikah" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH SURAT KETERANGAN UNTUK MENIKAH</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=input_menikah");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Nama</th>
	<th style=" background: #E6E6FA;"><center>Jenis Kelamin</th>
	<th style=" background: #E6E6FA;"><center>Tempat Lahir</center></th>
	<th style=" background: #E6E6FA;"><center>Tanggal Lahir</center></th>
	<th style=" background: #E6E6FA;"><center>Kewarganegaraan</th>
	<th style=" background: #E6E6FA;"><center>Agama</th>
	<th style=" background: #E6E6FA;"><center>Pekerjaan</th>
	<th style=" background: #E6E6FA;"><center>Alamat</th>
	<th style=" background: #E6E6FA;"><center>Bin / Binti</th>
	<th style=" background: #E6E6FA;"><center>Status Perkawinan</th>
	<th style=" background: #E6E6FA;"><center>Nama isteri/suami Terdahulu</th>
	<th style=" background: #E6E6FA;"><center>aksi</center></th>
<?php while($data  = mysqli_fetch_array($qry_menikah)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><?php echo $data['jenis_kel'] ?></td>
	 <td><?php echo $data['tmp_lahir'] ?></td>
	 <td><?php echo $data['tgl_lahir'] ?></td>
	 <td><?php echo $data['kewarganegaraan'] ?></td>
	 <td><?php echo $data['agama'] ?></td>
	 <td><?php echo $data['pekerjaan'] ?></td>
	 <td><?php echo $data['alamat'] ?></td>
	 <td><?php echo $data['bin_binti'] ?></td>
	 <td><?php echo $data['status'] ?></td>
	 <td><?php echo $data['pasangan_terdahulu'] ?></td>

	 <td><a href="?module=edit_menikah&id=<?php echo $data['id_menikah']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>  <a href="hapus_menikah.php?id=<?php echo $data['id_menikah']; ?>"><span class="glyphicon glyphicon-trash"></span></a>  <a href="print_menikah.php?id=<?php echo $data['id_menikah']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
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
          