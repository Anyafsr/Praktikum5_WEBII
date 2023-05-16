<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            background-color: #F7EFEF;
            margin: 0;
            padding: 0;
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 2.5rem;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        table {
            margin: 50px auto;
            background-color: #FFFFFF;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        th {
            background-color: #FFC4B4;
            color: #FFFFFF;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.2rem;
            padding: 20px;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        td {
            padding: 10px;
            text-align: center;
        }

        td img {
            height: 200px;
            width: 200px;
            object-fit: cover;
            border: 3px solid #FFFFFF;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease-in-out;
        }

        td img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h2>Welcome to StellarBooks</h2>
    <table>
        <tr>
            <th>Buku</th>
            <th>Member</th>
            <th>Peminjaman</th>
        </tr>
        <tr>
            <td><a href="buku.php"><img src="gambar/buku.jpg" alt=""></a></td>
            <td><a href="member.php"><img src="gambar/members.png" alt=""></a></td>
            <td><a href="peminjaman.php"><img src="gambar/pinjam.jpg" alt=""></a></td>
        </tr>
    </table>
</body>
</html>
