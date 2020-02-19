        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">

<body onload="window.print ()">


<tr><td colspan=10 color="#FFF000"><center>SURAT KETERANGAN</center></td></tr>
<tr><td colspan=10 ><center>BELUM PERNAH MENIKAH</center></td></tr>


<table width="100%" border="1" cellpadding="8" cellspacing="0">
<tr bgcolor='#f2a91c'> 
<th>No</th> 
<td>Nama</td>
<td>NIK</td>
<td>Jenis Kelamin</td>
<td>Tempat/ Tanggal Lahir</td>
<td>kewarganegaraan</td>
<td>Agama</td>
<td>Pekerjaan</td>
<td>Alamat</td>
</tr>

<?php
include"koneksi.php";
include"tglindo.php";
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_belumpernahmenikah ORDER BY id_belumpernahmenikah");
$no=1;
while($row = mysqli_fetch_array($sql)){
?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='left'> <?php echo $row['nama']; ?></td>
<td align='left'> <?php echo $row['nik']; ?> </td>
<td align='left'> <?php echo $row['jenis_kelamin']; ?> </td>
<td align='left'><?php echo $row['tmp_lahir']; ?>/ <?php echo TanggalIndo($row['tgl_lahir']);?> </td>
<td align='left'> <?php echo $row['kewarganegaraan']; ?>  </td>
<td align='center'> <?php echo $row['agama']; ?>  </td>
<td align='center'> <?php echo $row['pekerjaan']; ?>  </td>
<td align='center'> <?php echo $row['alamat']; ?>  </td>
</tr>
<?php
$no++;
}
?>
</table>
<br>
<br>
<<table>
<td><tr>LUMBIR,<?php echo date('d - M - Y'); ?></tr><br>
<tr>KEPALA DESA <br>
<tr>                 </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>      SUWARJO     </tr>
</td>
</table>

</div>
</div>
</div>
</div>