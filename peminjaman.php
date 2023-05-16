<?php 
require('model.php');
if (isset($_GET['id_peminjaman'])){
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman </title>
    <style>
        body {
            width: 900px;
            margin: auto;
            background-color: #f9dfe5;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th {
            background-color: #f2a5b9;
            font-weight: bold;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        td {
            background-color: #f8c1c7;
            color: #000;
            text-align: center;
            padding: 10px;
        }
        a {
            text-decoration: none;
            color: #fff;
        }
        .button {
            background-color: #d45d79;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 0;
            background-color: transparent;
        }   
        .header img {
            height: 50px;
            width: 50px;
            margin-right: 20px;
        }
        .header h2 {
            font-weight: bold;
            color: #fff;
            font-size: 28px;
            margin: 0;
            margin-left: 20px;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .nav a img {
            height: 70px;
            width: 100px;
            margin-right: 20px;
        }
        .nav a:last-child img {
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="index.php"><img src="gambar/rumah.png" alt="Home"></a>
        <h2>Peminjaman</h2>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>Nama Member</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilpeminjaman();
            ?>
        </tbody>
    </table>
    <nav class="nav">
        <a href="formpeminjaman.php"><button class="button">Tambah Data Peminjaman</button></a>
    </nav>
</body>
</html>