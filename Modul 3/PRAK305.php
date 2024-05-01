<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="input">
        <button type="text" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $input = $_POST["input"];
        $panjang = strlen($input);
        $a = 0;
        while ($a < $panjang) {
            $b = $panjang;
            while ($b > 0) {
                if ($b == $panjang) {
                    echo strtoupper($input[$a]);
                } else {
                    echo strtolower($input[$a]);
                }
                $b--;
            }
            $a++;
        }
    }
    ?>
    
</body>
</html>