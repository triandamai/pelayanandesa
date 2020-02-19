        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SURAT KETERANGAN KEMATIAN</h1>
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
$qry_kematian = mysqli_query($koneksi,"SELECT * from tbl_kematian");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>DATA SURAT KETERANGAN KEMATIAN</b>
</div>
<a href="?module=input_kematian" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH SURAT KETERANGAN KEMATIAN</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=input_kematian");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Nama</center></th>
	<th style=" background: #E6E6FA;"><center>NIK</center></th>
	<th style=" background: #E6E6FA;"><center>Tempat Lahir</center></th>
	<th style=" background: #E6E6FA;"><center>Tanggal Lahir</center></th>
	<th style=" background: #E6E6FA;"><center>Jenis Kelamin</center></th>	
	<th style=" background: #E6E6FA;"><center>Pekerjaan</center></th>
	<th style=" background: #E6E6FA;"><center>Kewarganegaraan</center></th>
	<th style=" background: #E6E6FA;"><center>Agama</center></th>	
	<th style=" background: #E6E6FA;"><center>Alamat</center></th>
	<th style=" background: #E6E6FA;"><center>Tanggal Meninggal</center></th>
	<th style=" background: #E6E6FA;"><center>Tempat Kematian</center></th>
	<th style=" background: #E6E6FA;"><center>Sebab Kematian</center></th>
	<th style=" background: #E6E6FA;"><center>aksi</center></th>
	<?php while($data = mysqli_fetch_array($qry_kematian)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><?php echo $data['nik'] ?></td>
	 <td><?php echo $data['tmp_lahir'] ?></td>
	 <td><?php echo $data['tgl_lahir'] ?></td>
	 <td><?php echo $data['jenis_kelamin'] ?></td>
	 <td><?php echo $data['pekerjaan'] ?></td>
	 <td><?php echo $data['kewarganegaraan'] ?></td>
	 <td><?php echo $data['agama'] ?></td>	 
	 <td><?php echo $data['alamat'] ?></td>
	 <td><?php echo $data['tgl_meninggal'] ?></td>
	 <td><?php echo $data['tmp_kematian'] ?></td>
	 <td><?php echo $data['sebab_kematian'] ?></td>
	 <td><a href="?module=edit_kematian&id=<?php echo $data['id_kematian']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
		 <a href="?module=hapus_kematian&id=<?php echo $data['id_kematian']; ?>"><span class="glyphicon glyphicon-trash"></span></a>  
		 <a href="print_kematian.php?id=<?php echo $data['id_kematian']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
	</tr>
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
