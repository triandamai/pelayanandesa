<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title>Print Data SKTM SEKOLAH</title>
<body onLoad="window.print()">
<?php
error_reporting(0);
session_start();
include "koneksi.php"; 
include "tglindo.php"; 
$d = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM tbl_sktm_sekolah where id_sktm_sekolah='$_GET[id]'"));
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img src='../../../img/lambang_banyumas.png' width='85px'></td>
</tr> 
<tr>
  <td align="center"><h3 style='margin-bottom:-5px' align=center>PEMERINTAH DESA LUMBIR<br>
         KECAMATAN LUMBIR KABUPATEN BANYUMAS<br> KEPALA DESA LUMBIR </h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. Raya Lumbir  Nomor 38 Tlp.(081) 6575624 Kode pos 53177</p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center><u>SURAT PENGANTAR KETERANGAN TIDAK MAMPU</u> </h3></td>
</tr> 
<tr>
    <td align="center"><p>Nomor : 00<?php echo "$d[id_sktm_sekolah]"; ?>-DS-IX-2019</p></td>
</tr> 
</table>

<table width='100%'>
<tr>
  <td>Yang bertanda tangan di bawah ini, Kepala Desa Lumbir Kecamatan Lumbir Kabupaten Banyumas, dengan ini
menerangkan dengan sesungguhnya bahwa :  </td>
</tr>

</table>
<br>


<table width='100%' >
<tr>
<td></td>
<td width="40%">Nama Lengkap</td>
<td width="95%">: <?php echo "$d[nama]";?></td>
</tr>
<tr>
<td></td>
<td>NIS</td>
<td>: <?php echo "$d[nis]";?></td>
</tr>
<tr>
<td></td>
<td>Nama Sekolah</td>
<td>: <?php echo "$d[nama_sekolah]";?></td>
</tr>
<tr>
<td></td>
<td>Tempat/ Tanggal Lahir</td>
<td>: <?php echo "$d[tmp_lahir]";?>/ <?php echo TanggalIndo($d['tgl_lahir']);?></td>
</tr>
<tr>
<td></td>
<td>Alamat Sekolah</td>
<td>: <?php echo "$d[alamat_sekolah]";?></td>
</tr>
<tr>
<td></td>
<td>Alamat Rumah</td>
<td>: <?php echo "$d[alamat_rumah]";?></td>
</tr>
<tr>
<td></td>
<td>Nama Orang Tua</td> 
<td> <br> a. Ayah : <?php echo "$d[nama_ayah]";?> <br> b. Ibu : <?php echo($d['nama_ibu']);?></td>
</tr>
<tr>
<td></td>
<td>Alamat Orang Tua</td>
<td>: <?php echo "$d[alamat_orang_tua]";?></td>
</tr>
<tr>
<td></td>
<td>Pekerjaan Orang Tua</td>
<td>: <?php echo "$d[pekerjaan_orang_tua]";?></td>
</tr>
<tr>
<td></td>
<td>Penghasilan Orang Tua</td>
<td>: <?php echo "$d[penghasilan_orang_tua]";?></td>
</tr>
<tr>
<td></td>
<td>Jumlah Tanggungan</td>
<td>: <?php echo "$d[jumlah_tanggungan]";?></td>
</tr>
</table>

<p>Keadaan Keluarga yang bersangkutan benar-benar kurang mampu. Demikian Surat Keterangan ini dibuat agar dapat digunakan untuk melengkapi salah satu persyaratan mendapatkan bantuan pendididkan .</p>
<table width=100%>
  <tr>
    <td width="30%">
	
	
	
    </td>
    </td>

    <td width="30%">

    </td>

    <td >
       
        <table align = "center">
            
            <tr>
              <td>Lumbir,</td>
              <td> <?php echo date("d M Y"); ?></td></tr>
        </table><br>
        <center>
          KEPALA DESA LUMBIR<br><br><br><br><br><br>

          SUWARJO <br>
         
    
        </center>
    </td>
  </tr>
</table> 
</body>