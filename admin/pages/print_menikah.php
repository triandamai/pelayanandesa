<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title>Print Data</title>
<body onLoad="window.print()">
<?php
error_reporting(0);
session_start();
include "koneksi.php"; 
include "tglindo.php"; 
$d = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM tbl_menikah where id_menikah='$_GET[id]'"));
?>
<table border=0 width=100%>
 
<tr>
    <td align="center" rowspan='3' width='88px'><img src='../../../img/lambang_banyumas.png' width='85px'></td>
</tr> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>PEMERINTAH KABUPATEN BANYUMAS<br>
         KECAMATAN LUMBIR <br> DESA LUMBIR </h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. Raya Lumbir  Nomor 38 Tlp.(081) 6575624 Kode pos 53177</p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center><u>SURAT KETERANGAN UNTUK MENIKAH</u> </h3></td>
</tr> 
<tr>
    <td align="center"><p>Nomor : 00<?php echo "$d[id_menikah]"; ?>-DS-IX-2019</p></td>
</tr> 
</table>

<table width='100%'>
<br>
<br>
<br>
<tr>
  <td>Saya yang bertanda tangan dibawah ini :  </td>
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
<td>Jenis Kelamin</td>
<td>: <?php echo "$d[jenis_kelamin]";?></td>
</tr>
<tr>
<td></td>
<td>Tempat/ Tanggal Lahir</td>
<td>: <?php echo "$d[tmp_lahir]";?>/ <?php echo TanggalIndo($d['tgl_lahir']);?></td>
</tr>
<tr>
<td></td>
<td>Kewarganegaraan</td>
<td>: <?php echo "$d[kewarganegaraan]";?></td>
</tr>
<tr>
<td></td>
<td>Agama</td>
<td>: <?php echo "$d[agama]";?></td>
</tr>
<tr>
<td></td>
<td>Pekerjaan</td>
<td>: <?php echo "$d[pekerjaan]";?></td>
</tr>
<tr>
<td></td>
<td>Alamat</td>
<td>: <?php echo "$d[alamat]";?></td>
</tr>
</tr>
<tr>
<td></td>
<td>Bin / Binti</td>
<td>: <?php echo "$d[bin_binti]";?></td>
</tr>
</tr>
<tr>
<td></td>
<td>Status Perkawinan</td>
<td>: <?php echo "$d[stts_perkawinan]";?></td>
</tr>
</tr>
<tr>
<td></td>
<td>Nama isteri/suami Terdahulu</td>
<td>: <?php echo "$d[nm]";?></td>
</tr>
</table>

<p>Demikian surat keterangan ini dibuat untuk dipergunakan seperlunya.</p>
<table width=100%>
  <tr>
    <td width="30%">
	
	
	<center>
        <br><br><br> 
		<br><br><br><br><br><br>

           <br>
         
    
        </center>
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