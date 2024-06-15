<?php require 'Model.php';
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data Buku</title>
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

        input[type="text"] {
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
    <h2>Edit Data Buku</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td>
                    <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ? "value='" . $result[0]["judul_buku"] . "'" : "value=''"; ?> required>
                </td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td>
                    <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ? "value='" . $result[0]["penulis"] . "'" : "value=''"; ?> required>
                </td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ? "value='" . $result[0]["penerbit"] . "'" : "value=''"; ?> required>
                </td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td>
                    <input type="text" name="thn_terbit" <?php echo (isset($_GET['id_buku'])) ? "value='" . $result[0]["tahun_terbit"] . "'" : "value=''"; ?> required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_buku'])) {
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
    tambahdatabuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thn_terbit']);
}
if (isset($_POST['update'])) {
    updatebuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thn_terbit']);
}
?>