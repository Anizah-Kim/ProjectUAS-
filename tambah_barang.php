<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<title>Form Tambah Barang</title>
</head>
<body>
	<div class="container">
    <h3 class="text-center mt-3 mb-5">SILAHKAN TAMBAH BARANG</h3>
    <div class="card p-5 mb-5">
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
          <label for="produk1">Nama Barang</label>
          <input type="text" class="form-control" id="barang1" name="nama_produk">
        </div>
        <div class="form-group">
          <label for="jenis">Jenis Barang</label>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="Official" name="jenis_produk" checked>Official 
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="UnOfficial" name="jenis_produk">UnOfficial
            </label>
          </div>
         </div>
        <div class="form-group">
          <label for="stok1">Stok</label>
          <input type="text" class="form-control" id="stok1" name="stok">
        </div>
        <div class="form-group">
          <label for="harga1">Harga Barang</label>
          <input type="text" class="form-control" id="harga1" name="harga">
        </div>
        <div class="form-group">
          <label for="gambar">Foto Barang</label>
          <input type="file" class="form-control-file border" id="gambar" name="gambar">
        </div><br>
        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
        <button type="reset" class="btn btn-danger" name="reset">Hapus</button>
      </form>

      <?php 
  if(isset($_POST['tambah'])){
    $nama = $_POST['nama_produk'];
    $jenis = $_POST['jenis_produk'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = './upload/';

    move_uploaded_file($source, $folder.$gambar);
    $insert=mysqli_query($conn,"insert into produk (nama_produk,jenis_produk,stok,harga, gambar) value ('".$nama."','".$jenis."','".$stok."','".$harga."','".$gambar."')") or die(mysqli_error($conn));

    if($insert){
      header("location: daftar_barang.php");
    }
    else {
      echo "Maaf, terjadi kesalahan saat mencoba menyimpan data ke database";
    }
  }

   ?>

  </div>
  </div>
</body>
</html>