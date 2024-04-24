<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<?php
$namaX = $nimX = $genderX = "";
$nama = $nim = $jenis_kelamin = "";
if (isset($_POST["submit"])) {
    if (empty($_POST["nama"])) {
        $namaX = "nama tidak boleh kosong";
    } else {
        $nama = $_POST["nama"];
    }

    if (empty($_POST["nim"])) {
        $nimX = "nim tidak boleh kosong";
    } else {
        $nim = $_POST["nim"];
    }

    if (empty($_POST["jenis_kelamin"])) {
        $genderX = "jenis kelamin tidak boleh kosong";
    } else {
        $jenis_kelamin = $_POST["jenis_kelamin"];
    }
}
?>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Nama:
        <input type="text" name="nama">
        <span class="error">* <?php echo $namaX; ?></span>
        <br>
        Nim:
        <input type="text" name="nim">
        <span class="error">* <?php echo $nimX; ?></span>
        <br>
        Jenis Kelamin : <span class="error">* <?php echo $genderX; ?></span>
        <br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if (isset($jenis_kelamin) && $jenis_kelamin == "Laki-laki") echo "checked"; ?>> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if (isset($jenis_kelamin) && $jenis_kelamin == "Perempuan") echo "checked"; ?>> Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
<?php
if (!empty($nama) && !empty($nim) && !empty($jenis_kelamin)) {
    echo "$nama <br>";
    echo "$nim <br>";
    echo "$jenis_kelamin <br>";
}
?>

</html>