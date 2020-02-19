        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> SURAT KETERANGAN DOMISILI</h1>
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
$qry_domisili = mysqli_query($koneksi,"SELECT * from tbl_domisili");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b> SURAT KETERANGAN DOMISILI</b>
</div>
<a href="?module=input_domisili" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH SURAT KETERANGAN DOMISILI</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=input_domisili");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Nama</th>
	<th style=" background: #E6E6FA;"><center>NIK</center></th>
	<th style=" background: #E6E6FA;"><center>Jenis Kelamin</th>
	<th style=" background: #E6E6FA;"><center>Tempat Lahir</th>
	<th style=" background: #E6E6FA;"><center>Tanggal Lahir</th>	
	<th style=" background: #E6E6FA;"><center>Agama</th>
	<th style=" background: #E6E6FA;"><center>Kewarganegaraan</th>
	<th style=" background: #E6E6FA;"><center>Pekerjaan</th>
	<th style=" background: #E6E6FA;"><center>Alamat</th>
	<th style=" background: #E6E6FA;"><center>aksi</center></th>
	<?php while($data = mysqli_fetch_array($qry_domisili)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><?php echo $data['nik'] ?></td>
	 <td><?php echo $data['jenis_kelamin'] ?></td>
	 <td><?php echo $data['tmp_lahir'] ?></td>
	 <td><?php echo $data['tgl_lahir'] ?></td>	 
	 <td><?php echo $data['agama'] ?></td>
	 <td><?php echo $data['kewarganegaraan'] ?></td>
	 <td><?php echo $data['pekerjaan'] ?></td>
	 <td><?php echo $data['alamat'] ?></td>
	 <td><a href="?module=edit_domisili&id=<?php echo $data['id_domisili']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
		 <a href="?module=hapus_domisili&id=<?php echo $data['id_domisili']; ?>"><span class="glyphicon glyphicon-trash"></span></a>  
		 <a href="print_domisili.php?id=<?php echo $data['id_domisili']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
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