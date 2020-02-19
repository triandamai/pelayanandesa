        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">

<body onload="window.print ()">


<tr><td colspan=8 color="#FFF000"><center>PEMERINTAH KABUPATEN BANYUMAS</center></td></tr>
<tr><td colspan=8 ><center>KECAMATAN LUMBIR</center></td></tr>
<tr><td colspan=8 ><center>DESA LUMBIR</center></td></tr>
<tr><td colspan=8 ><center>Jl. Raya Lumbir Desa. Lumbir Kec. Lumbir 53177 Banyumas Jawa Tengah</center></td></tr>
<tr><td colspan=8 ><center>=======================================================</center></td></tr>

<table width="100%" border="1" cellpadding="8" cellspacing="0">
<tr bgcolor='#f2a91c'> 
<th>No</th> 
<td>Nama</td>
<td>NIS</td>
<td>Nama Sekolah</td>
<td>Tempat/ Tanggal Lahir</td>
<td>Alamat Sekolah</td>
<td>Alamat Rumah</td>
<td>Nama Ayah</td>
<td>Nama Ibu</td>
<td>Alamat Orang Tua</td>
<td>Pekerjaan Orang Tua</td>
<td>Penghasilan Orang Tua</td>
<td>Jumlah Tanggungan</td>
</tr>

<?php
include"koneksi.php";
include"tglindo.php";
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_sktm_sekolah ORDER BY id_sktm_sekolah");
$no=1;
while($row = mysqli_fetch_array($sql)){
?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='left'> <?php echo $row['nama']; ?></td>
<td align='left'> <?php echo $row['nis']; ?> </td>
<td align='left'> <?php echo $row['nama_sekolah']; ?> </td>
<td align='left'><?php echo $row['tmp_lahir']; ?>/ <?php echo TanggalIndo($row['tgl_lahir']);?> </td>
<td align='left'> <?php echo $row['alamat_sekolah']; ?>  </td>
<td align='left'> <?php echo $row['alamat_rumah']; ?>  </td>
<td align='center'> <?php echo $row['nama_ayah']; ?>  </td>
<td align='center'> <?php echo $row['nama_ibu']; ?>  </td>
<td align='center'> <?php echo $row['alamat_orang_tua']; ?>  </td>
<td align='center'> <?php echo $row['pekerjaan_orang_tua']; ?>  </td>
<td align='center'> <?php echo $row['penghasilan_orang_tua']; ?>  </td>
<td align='center'> <?php echo $row['jumlah_tanggungan']; ?>  </td>
</tr>
<?php
$no++;
}
?>
</table>
<table>
<td>
<tr>KEPALA DESA LUMBIR,<?php echo date('d - M - Y'); ?></tr><br>
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