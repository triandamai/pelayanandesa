        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SURAT PENGANTAR IJIN KERAMAIAN</h1>
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
$qry_ijin_keramaian = mysqli_query($koneksi,"SELECT * from tbl_hiburan");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>DATA SURAT PENGANTAR IJIN KERAMAIAN</b>
</div>
<a href="?module=input_ijin_keramaian" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH SURAT PENGANTAR IJIN KERAMAIAN</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=input_ijin_keramaian");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Nama</center></th>
	<th style=" background: #E6E6FA;"><center>NIK</center></th>
	<th style=" background: #E6E6FA;"><center>Tempat Lahir</center></th>
	<th style=" background: #E6E6FA;"><center>Tanggal Lahir</center></th>
	<th style=" background: #E6E6FA;"><center>Agama</center></th>	
	<th style=" background: #E6E6FA;"><center>Kewarganegaraan</center></th>
	<th style=" background: #E6E6FA;"><center>Pekerjaan</center></th>
	<th style=" background: #E6E6FA;"><center>Alamat</center></th>
	<th style=" background: #E6E6FA;"><center>Acara</center></th>
	<th style=" background: #E6E6FA;"><center>Hiburan</center></th>
	<th style=" background: #E6E6FA;"><center>Tanggal Keramaian</center></th>
	<th style=" background: #E6E6FA;"><center>Tempat Acara</center></th>
	<th style=" background: #E6E6FA;"><center>aksi</center></th>
	<?php while($data = mysqli_fetch_array($qry_ijin_keramaian)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><?php echo $data['nik'] ?></td>
	 <td><?php echo $data['tmp_lahir'] ?></td>
	 <td><?php echo $data['tgl_lahir'] ?></td>
	 <td><?php echo $data['agama'] ?></td>	 
	 <td><?php echo $data['kewarganegaraan'] ?></td>
	 <td><?php echo $data['pekerjaan'] ?></td>
	 <td><?php echo $data['alamat'] ?></td>
	 <td><?php echo $data['acara'] ?></td>
	 <td><?php echo $data['hiburan'] ?></td>
	 <td><?php echo $data['tgl_hiburan'] ?></td>
	 <td><?php echo $data['tmp_acara'] ?></td>
	 <td><a href="?module=edit_ijin_keramaian&id=<?php echo $data['id_ijin_keramaian']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
		 <a href="?module=hapus_ijin_keramaian&id=<?php echo $data['id_ijin_keramaian']; ?>"><span class="glyphicon glyphicon-trash"></span></a>  
		 <a href="print_ijin_keramaian.php?id=<?php echo $data['id_ijin_keramaian']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
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
