<?php
require __DIR__ . '/koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda - Baca Buku Online</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header>
    <div class="title-box">
      <h1>Baca Buku Online</h1>
    </div>
    <a href="index.html" class="logout-btn">Logout</a>

    <div>
    <a href="crud.php" class="btn btn-primary">Daftar Buku</a>
    </div>
  </header>
 
  <hr>

  <h2>Daftar Buku</h2>
  <div class="book-list">
    <div class="book">
      <h3>Rahasia Alam</h3>
      <p>Penulis: Dina Anggraini</p>
      <a href="baca1.html">Baca Sekarang</a>
    </div>
    <div class="book">
      <h3>Langit Senja</h3>
      <p>Penulis: Ardi Setiawan</p>
      <a href="baca2.html">Baca Sekarang</a>
    </div>
    <div class="book">
      <h3>Hujan di Musim Dingin</h3>
      <p>Penulis: Rani Pratiwi</p>
      <a href="baca3.html">Baca Sekarang</a>
    </div>
    <div class="book">
      <h3>Jejak di Pasir</h3>
      <p>Penulis: Rudi Hadi</p>
      <a href="baca4.html">Baca Sekarang</a>
    </div>
    <div class="book">
      <h3>Cahaya di Ujung Senja</h3>
      <p>Penulis: Intan Permata</p>
      <a href="baca5.html">Baca Sekarang</a>
    </div>
  </div>

  <footer>
    <p>© 2025 Baca Buku Online</p>
  </footer>
</body>
</html>
