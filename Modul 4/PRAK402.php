<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK402</title>
    <style>
        tr,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    $data = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
    ]
    ?>
    <table border="1">
        <tr>
            <td><b>Nama</b></td>
            <td><b>NIM</b></td>
            <td><b>Nilai UTS</b></td>
            <td><b>Nilai UAS</b></td>
            <td><b>Nilai Akhir</b></td>
            <td><b>Nilai Akhir</b></td>   
        </tr>

        <?php
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]["nilaiAkhir"] = $data[$i]["uts"] * 0.4 + $data[$i]["uas"] * 0.6;
            if ($data[$i]["nilaiAkhir"] >= 80) {
                $data[$i]["huruf"] = "A";
            } elseif ($data[$i]["nilaiAkhir"] > 70) {
                $data[$i]["huruf"] = "B";
            } elseif ($data[$i]["nilaiAkhir"] > 60) {
                $data[$i]["huruf"] = "C";
            } elseif ($data[$i]["nilaiAkhir"] > 50) {
                $data[$i]["huruf"] = "D";
            } elseif ($data[$i]["nilaiAkhir"] < 50) {
                $data[$i]["huruf"] = "E";
            }
        }

        for ($i = 0; $i < count($data); $i++) {
            echo "<tr>";
            echo "<td>" . $data[$i]["nama"]. "</td>";
            echo "<td>" . $data[$i]["nim"] . "</td>";
            echo "<td>" . $data[$i]["uts"] . "</td>";
            echo "<td>" . $data[$i]["uas"] . "</td>";
            echo "<td>" . $data[$i]["nilaiAkhir"] . "</td>";
            echo "<td>" . $data[$i]["huruf"] . "</td>";
            echo "</tr>";
        }
        ?>
        
    </table>
</body>
</html>