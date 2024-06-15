<?php
require 'Model.php';
if (isset($_GET['id_member'])) {
    editmember();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data Member</title>
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

        input[type="text"], input[type="datetime-local"], input[type="date"], textarea {
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
    <h2>Edit Data Member</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Member</td>
                <td>
                    <input type="text" name="nama_member" <?php echo (isset($_GET['id_member'])) ? "value='" . $result[0]["nama_member"] . "'" : "value=''"; ?> required>
                </td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td>
                    <input type="text" name="nomor_member" <?php echo (isset($_GET['id_member'])) ? "value='" . $result[0]["nomor_member"] . "'" : "value=''"; ?> required>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" cols="30" rows="10" required><?php echo (isset($_GET['id_member'])) ? $result[0]["alamat"] : ""; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Tanggal Mendaftar</td>
                <td>
                    <input type="datetime-local" name="tgl_daftar" <?php echo (isset($_GET['id_member'])) ? "value='" . date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) . "'" : "value=''"; ?> required>
                </td>
            </tr>
            <tr>
                <td>Tanggal Terakhir Bayar</td>
                <td>
                    <input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ? "value='" . $result[0]["tgl_terakhir_bayar"] . "'" : "value=''"; ?> required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_member'])) {
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
    $tgl_daftar = date_create($_POST['tgl_daftar']);
    $tgl_daftar = date_format($tgl_daftar, "Y-m-d H:i:s");
    print_r($_POST);
    tambahdatamember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
}
if (isset($_POST['update'])) {
    $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
    updatemember($_GET['id_member'], $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
}
?>