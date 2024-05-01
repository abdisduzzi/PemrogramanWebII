<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
</head>

<body>
    <form action="" method="POST">
        Batas Bawah : <input type="text" name="bawah"><br>
        Batas Atas : <input type="text" name="atas"><br>
        <button type="submit" name="cetak"> Cetak </button>
    </form>
</body>

<?php
if (isset($_POST["cetak"])) {
    $bawah = $_POST["bawah"];
    $atas = $_POST["atas"];
    do {
        if (($bawah + 7) % 5 == 0) {
            echo " <img src='siu.png' width='20' height='20'/> ";
        } else {
            echo " $bawah ";
        }
        $bawah++;
    } while ($bawah <= $atas);
}
?>

</html>