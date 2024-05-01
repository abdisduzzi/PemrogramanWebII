<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];
    }
    if (isset($_POST["kurang"])) {
        $nilai -= 1;
    }
    if (isset($_POST["tambah"])) {
        $nilai += 1;
    }
    if (empty($nilai)) : ?>
        <form action="" method="POST">
            Jumlah bintang : <input type="text" name="nilai"><br>
            <button type="submit" name="submit"> Submit </button>
        </form>
    <?php
    endif;
    if (!empty($nilai)) :
        echo "Jumlah bintang $nilai <br>";
        $a = 1;
        while ($a <= $nilai) {
            echo " <img src='siu.png' width='50' height='50'/> ";
            $a++;
        }
    ?>
        <form action="" method="POST">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
            <input type="text" name="nilai" value="<?= $nilai ?>" hidden>
        <?php
    endif;
        ?>

</body>
</html>