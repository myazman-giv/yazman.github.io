<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 11 - 30 April 2021
php
*/
?><?php
  require 'functions.php';

  // ambil id dari url
  $id = $_GET['id'];

  // query jersey berdasarkan id
  $jrs = query("SELECT * FROM jersey WHERE id = $id");

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Jersey</title>
</head>

<body>
  <h3>Detail Jersey</h3>
  <ul>
    <li><img src="img/<?= $jrs["gambar"]; ?>" width="50"></li>
    <li><?= $jrs["jersey"]; ?></li>
    <li><?= $jrs["ukuran"]; ?></li>
    <li><?= $jrs["asal"]; ?></li>
    <li><?= $jrs["harga"]; ?></li>
    <li><a href="ubah.php?id=<?= $jrs['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $jrs['id']; ?>" onclick="return confirm ('apakah anda yakin');">hapus</a></li>
    <li><a href="index.php">Kembali ke Halaman sebelumnya</a></li>
  </ul>
</body>

</html>