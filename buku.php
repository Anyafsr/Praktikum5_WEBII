<?php 
require('model.php');
if (isset($_GET['id_buku'])){
    hapusbuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku Perpus</title>
    <style>
     body { 
            max-width: 900px;
            margin: auto;
            background-color: #f2e6f7;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 900px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            margin-top: 20px;
        }
        table td,
        table th {
            padding: 10px;
            text-align: center;
        }
        table thead tr {
            background-color: #d5a6bd;
            color: #fff;
            text-align: left;
        }
        table tbody tr {
            border-bottom: 1px solid #ccc;
        }
        table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        table tbody tr:last-of-type {
            border-bottom: 2px solid #d5a6bd;
        }
        table tbody td:last-of-type {
            width: 120px;
        }
        table tbody td a {
            color: #fff;
            padding: 6px 10px;
            background-color: #d5a6bd;
            border-radius: 5px;
            text-decoration: none;
        }
        table tbody td a:hover {
            background-color: #b989a7;
        }
        .icon {
            display: inline-block;
            position: relative;
            margin-right: 10px;
        }
        .icon img {
            display: block;
            width: 50px;
            height: 50px;
            border: 2px solid #d5a6bd;
            border-radius: 5px;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .container button {
            padding: 10px 20px;
            background-color: #d5a6bd;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .container button:hover {
            background-color: #b989a7;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Buku</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilbuku();
            ?>
        </tbody>
        </table>
    <div class="container">
        <button><a href="formbuku.php">Tambah Buku</a></button>
        <button><a href="peminjaman.php">Pinjam Buku</a></button>
        <div>
            <a href="index.php">
                <div class="icon">
                    <img src="gambar/rumah.png" alt="Beranda">
                </div>
            </a>
            
        </div>
    </a>
</body>
</html>
</html>