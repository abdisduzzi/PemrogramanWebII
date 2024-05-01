<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>

<body>
    <form action="" method="POST">
        Tinggi : <input type="text" name="tinggi"><br>
        Alamat Gambar : <input type="text" name="web_gambar"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    
    <?php
    if (isset($_POST["cetak"])) {
        $tinggi = $_POST["tinggi"];
        $web_gambar = $_POST["web_gambar"];

        $i = 1;
        while ($i <= $tinggi) {
            $j = $tinggi;
            while ($j >= $i) {
                echo "<img src='$web_gambar' width='20' height='20'/>";
                $j--;
            }
            echo '<br>';
            $i++;
            $k = 1;
            while ($k < $i) {
                echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;";
                $k++;
            }
        }
    }
    ?>

</body>
</html>