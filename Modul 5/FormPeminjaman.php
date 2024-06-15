<?php
require 'Model.php';
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data Peminjaman</title>
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
            background-color: #ffffff;
        }

        td {
            padding: 10px;
            border: 1px solid #dddddd;
            text-align: left;
        }

        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
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
            margin: 10px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e74c3c;
        }
    </style>
</head>

<body>
    <h2>Edit Data Peminjaman</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td>
                    <input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ? "value='" . $result[0]["tgl_pinjam"] . "'" : "value=''"; ?> required>
                </td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td>
                    <input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ? "value='" . $result[0]["tgl_kembali"] . "'" : "value=''"; ?> required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type='submit' name='update'>Update</button>";
                    } else {
                        echo "<button type='submit' name='submit'>Tambah</button>";
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    tambahdatapeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali']);
}
if (isset($_POST['update'])) {
    updatepeminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
}
?>