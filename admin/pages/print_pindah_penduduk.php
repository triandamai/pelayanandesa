<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title>Print Data pindah penduduk</title>
<body onLoad="window.print()">
<?php
error_reporting(0);
session_start();
include "koneksi.php"; 
include "tglindo.php"; 
$d = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM tbl_pindah_penduduk where id_pindah_penduduk='$_GET[id]'"));
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img src='../../../img/lambang_banyumas.png' width='85px'></td>
</tr> 
<tr>
    <<td align="center"><h3 style='margin-bottom:-5px' align=center>PEMERINTAH DESA LUMBIR<br>
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
    <td align="center"><h3 style='margin-bottom:-5px' align=center><u>SURAT PENGANTAR PINDAH PENDUDUK</u> </h3></td>
</tr> 
<tr>
    <td align="center"><p>Nomor : 00<?php echo "$d[id_pindah_penduduk]"; ?>-DS-IX-2019</p></td>
</tr> 
</table>

<table width='100%'>
<tr>
  <td>Yang bertanda tangan di bawah ini, Kepala Desa Lumbir Kecamatan Lumbir Kabupaten Banyumas, 
menerangkan menerangkan pemohon pindah penduduk WNI dengan data sebagai berikut :  </td>
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
<td>NIK</td>
<td>: <?php echo "$d[nik]";?></td>
</tr>
<tr>
<td></td>
<td>Nomer Kartu Keluarga</td>
<td>: <?php echo "$d[no_kk]";?></td>
</tr>
<tr>
<td></td>
<td>Nama Kepala Keluarga</td>
<td>: <?php echo "$d[nama_kepala_keluarga]";?></td>
</tr>
<tr>
<td></td>
<td>Alamat Sekarang</td>
<td>: <?php echo "$d[alamat_sekarang]";?></td>
</tr>
<tr>
<td></td>
<td>Alamat Tujuan Pindah</td>
<td>: <?php echo "$d[alamat_pindah]";?></td>
</tr>
<tr>
<td></td>
<td>Jumlah Keluarga Yang Pindah</td>
<td>: <?php echo "$d[jml_anggota_pindah]";?></td>
</tr>
</table>

<p>Adapun permohonan pindah penduduk WNI yang bersangkutan sebagai mana terlampir. Demikian surat pengantar pindah ini dibuat agar digunakan sebagaimana mestinya.</p>
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
    </td>
  </tr>
</table> 
</body>