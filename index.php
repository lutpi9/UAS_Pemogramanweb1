<?php
require "includes/config.php";
require "includes/function.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kuliner</title>
</head>
<body>
    <header>
        <!-- Memusatkan teks menggunakan inline CSS -->
        <h1 style="text-align: center;">CAFE MILENIAL</h1>
        <hr>
    </header>
    <div style="text-align: center;">
        <?php require "includes/navbar.php" ?>
        <hr>
    </div>
    <div align="center">
        <?php require "includes/konten.php" ?>
    </div>
    <footer style="margin-top: 3em; text-align: center;">
        <hr>
        Lutpiah Ainus Shiddik @ <?= date("Y") ?>
    </footer>
</body>
</html>
