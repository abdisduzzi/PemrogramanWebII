<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>

<body>
    <form action="" method="POST">
        Jumlah Peserta : <input type="text" name="jumlah"><br>
        <button type="submit" name="cetak"> Cetak </button>
    </form>

    <?php
    if (isset($_POST["cetak"])) {
        $angka = $_POST["jumlah"];
        $i = 1;
        while ($i <= $angka) {
            if ($i % 2 == 0) {
                echo "<h2 style='color:red'> Peserta ke-$i</h2><br>";
            } else {
                echo "<h2 style='color:green'> Peserta ke-$i</h2><br>";
            }
            $i++;
        }
    }
    ?>

</body>
</html>