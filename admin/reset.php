<html>

<head>
     <meta charset="UTF-8" />
    <title>Halaman Cek Password</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>


<form method="post" action="" target="_self"> 
<center><h2>Form Lupa Kata Sandi..</h2><br />
<b>Masukkan Username yang sudah pernah terdaftar sebelumnya.</b></center>
<table border="0" align="center"> 
<tr><td>Username<td>:<td><input type="text" name="username"> 
<tr><td><input type="submit" class="btn btn-primary" value="Cek Password">
</table> 
</form> 
<?
include "../koneksi.php";
 $checkMIEZdataThisismytechnique="select username from tbl_admin where username='$_POST[username]'";
$cekdataapakahadaatautidakditakengonscript=mysqli_query($checkMIEZdataThisismytechnique) or die(mysqli_error());
  if(mysql_num_rows($cekdataapakahadaatautidakditakengonscript)>0)
  { 
$result=mysqli_query("select * from tbl_admin where username='$_POST[username]'");
$obj=mysqli_fetch_object($result);
echo "<table border='0' align='center'>
<tr><td>Username<td>:<td>";
echo $obj->username; 
echo "<tr><td>Password Anda<td>:<td>".$obj->password; 
echo "<tr><td colspan=5><b>Kembali Ke <a href='index.php'>Login</a></b>"; 
  }else{
  echo "<center>Username yang anda masukkan belum pernah terdaftar!! silakan Hubungi Admin Untuk Informasi Lebih Lanjut !!</center>";
  }?> 
</html>