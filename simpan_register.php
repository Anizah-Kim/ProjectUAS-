<?php
include "koneksi.php";
$username=$_POST["username"];
$password=$_POST["password"]; 
$nama_lengkap=$_POST["nama"];
$tanggal_lahir=$_POST["tanggal_lahir"];
$hp=$_POST["hp"];
$alamat=$_POST["alamat"];

  $hasil=mysqli_query($koneksi, "INSERT INTO user (username,password,nama_lengkap,tanggal_lahir,alamat,hp) VALUES('$username','$password','$nama','$tanggal_lahir','$hp',$alamat')");

  if ($hasil) 
  {
	echo "<script>
				alert('Anda Berhasil Registrasi !');
				document.location='login.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='register.php';
		  </script>";
  }

?>