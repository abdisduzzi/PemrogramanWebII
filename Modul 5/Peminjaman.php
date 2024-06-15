<?php
require 'Model.php';
if (isset($_GET['id_peminjaman'])) {
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Peminjaman Perpustakaan</title>
    <style>
        body {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h2 {
            color: #2c3e50;
            margin-top: 20px;
            font-size: 2em;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            transition: background-color 0.3s;
        }

        th {
            background-color: #3498db;
            color: #ffffff;
        }

        td a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            transition: color 0.3s;
        }

        td a:hover {
            color: #e74c3c;
        }

        td:hover {
            background-color: #ecf0f1;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 20px auto;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e74c3c;
        }

        .button-container {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h2>Data Peminjaman Perpustakaan</h2>
    <div class="button-container">
        <a href="FormPeminjaman.php"><button>Tambah Data</button></a>
    </div>
    <table border="1">
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?= tampildataperpustakaan("peminjaman") ?>
    </table>
    <div class="button-container">
        <a href="index.php"><button>Kembali</button></a>
    </div>
    
</body>
</html>