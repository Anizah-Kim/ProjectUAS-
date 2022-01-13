<?php
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

	<title>Jasa Titip Merchandise</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="index.html"><strong>Korean</strong>Jastip</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_barang.php">DAFTAR BARANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="barang.php">BARANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="barang_pesanan.php">BARANG PESANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="list_pesanan.php">LIST PESANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="#">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->
      <div class="container">
        <a href="tambah_barang.php" class="btn btn-success mt-3">TAMBAH DAFTAR BARANG</a>
        <div class="row mt-3">
          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/BE.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Album BE</h5>
               <label class="card-text harga">Rp. 650.000</label><br>
                <a href="#" class="btn btn-primary btn-sm">EDIT</a>
                <a href="#" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/MOTS7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">MOTS7</h5>
               <label class="card-text harga">Rp. 350.000</label><br>
                <a href="#" class="btn btn-primary btn-sm">EDIT</a>
                <a href="#" class="btn btn-danger btn-sm">HAPUS</a>
              </div>
            </div>
          </div>
</body>
</html>