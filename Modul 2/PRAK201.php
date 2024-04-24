<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201</title>
</head>

<body>
    <form action="" method="post">
        Nama: 1 <input type="text" name="n1"><br>
        Nama: 2 <input type="text" name="n2"><br>
        Nama: 3 <input type="text" name="n3"><br>
        <button type="submit" name="submit">Urutkan</button>
    </form>
    <?php

    if (isset($_POST["submit"])) {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        if ($n1 < $n2 && $n1 < $n3) {
            echo $n1, "<br>";
            if ($n2 < $n3) {
                echo $n2, "<br>";
                echo $n3, "<br>";
            } else if ($n2 > $n3) {
                echo $n3, "<br>";
                echo $n2, "<br>";
            }
        }
        if ($n2 < $n1 && $n2 < $n3) {
            echo $n2, "<br>";
            if ($n1 < $n3) {
                echo $n1, "<br>";
                echo $n3, "<br>";
            } else if ($n1 > $n3) {
                echo $n3, "<br>";
                echo $n1, "<br>";
            }
        } else if ($n3 < $n1 && $n3 < $n2) {
            echo $n3, "<br>";
            if ($n1 < $n2) {
                echo $n1, "<br>";
                echo $n2, "<br>";
            } else if ($n1 > $n2) {
                echo $n2, "<br>";
                echo $n1, "<br>";
            }
        }
    }
    ?>
</body>
</html>