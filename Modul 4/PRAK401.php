<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK401</title>
</head>

<body>
    <form action="" method="post">
        Panjang : <input type="text" name="panjang"><br>
        Lebar : <input type="text" name="lebar"><br>
        Nilai : <input type="text" name="nilai"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $nilaiPanjang = $_POST["panjang"];
        $nilaiLebar = $_POST["lebar"];
        $nilai = $_POST["nilai"];
        $arr = explode(" ", $nilai);
        $jumlahNilai = count($arr);

        if ($nilaiPanjang * $nilaiLebar == $jumlahNilai) {
            $inputNilai = 0;
            echo "<table border = '1' style='width:100px; height: 100px'>";
            for ($panjang = 0; $panjang < $nilaiPanjang; $panjang++) {
                echo "<tr>";
                for ($lebar = 0; $lebar < $nilaiLebar; $lebar++) {
                    $tampil[$panjang][$lebar] = $arr[$inputNilai];
                    echo "<td>" . $tampil[$panjang][$lebar] . "</td>";
                    $inputNilai++;
                }
                echo "</tr>";
            }
        } else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>

</body>
</html>
</body>
</html>