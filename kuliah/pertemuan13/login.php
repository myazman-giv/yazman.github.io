<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 13 - 8 Mei 2021
php
*/
?><?php
  session_start();

  if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
  }
  require 'functions.php';

  // ketika login ditekan
  if (isset($_POST['login'])) {
    $login = login($_POST);
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h3>Form Login</h3>
  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style:italic"><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password" required>
        </label>
      </li>
      <li>
        <button type="submit" name="login">login</button>
      </li>
      <li><button><a href="registrasi.php">registrasi</a></button></li>
    </ul>
  </form>
</body>

</html>