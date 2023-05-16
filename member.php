<?php 
require('model.php');
if (isset($_GET['id_member'])){
    hapusmember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
        max-width: 900px;
        margin: auto;
    }
    table{
        border-collapse: collapse;
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        background-color: #F6E3CE;
    }
    th{
        background-color: #E6B8B7;
        color: #fff;
        font-weight: bold;
        padding: 10px;
        text-align: left;
        text-transform: uppercase;
    }
    td{
        background-color: #fff;
        color: #333;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }
    tr:nth-child(even) td{
        background-color: #F8D7DA;
    }
    tr:last-child td{
        border-bottom: none;
    }
    .btn-hapus{
        background-color: #dc3545;
        color: #fff;
        padding: 5px 10px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
    }
    .btn-hapus:hover{
        background-color: #c82333;
    }
    </style>
    <title>Member Perpus</title>
</head>
<body>
    <h2 style= "text-align:Center">Member</h2>
    <table border = "1">
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilmember();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="formmember.php"><button>Tambah Member</button></a> <br></br>
    <a href="index.php"><img src="gambar/rumah.png" alt="" height="50"width="50"></a>
    <a href="buku.php"><img src="gambar/buku.jpg" alt="" height = "50" width = "50"></a>
    <a href="peminjaman.php"><img src="gambar/pinjam.jpg" alt="" height ="50"width = "50"></a>
    </div>
</body>
</html>