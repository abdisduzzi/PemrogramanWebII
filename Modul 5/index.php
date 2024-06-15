<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Perpustakaan</title>
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
            width: 60%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        td {
            padding: 15px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            transition: background-color 0.3s;
        }

        td a {
            display: block;
            width: 100%;
            height: 100%;
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
    </style>
</head>

<body>
    <h2>Data Perpustakaan</h2>
    <table border="1">
        <tr>
            <td>
                <a href="Member.php">Data Member</a>
            </td>
            <td>
                <a href="Buku.php">Data Buku</a>
            </td>
            <td>
                <a href="Peminjaman.php">Data Peminjaman</a>
            </td>
        </tr>
    </table>
</body>

</html>