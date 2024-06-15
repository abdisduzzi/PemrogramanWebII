<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK403</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $data = [
        [
            "no" => 1, "nama" => "Ridho",
            "mk" => [
                ["mataKuliah" => "Pemrograman I", "sks" => 2],
                ["mataKuliah" => "Praktikum Pemrograman I", "sks" => 1],
                ["mataKuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
                ["mataKuliah" => "Arsitektur Komputer", "sks" => 3]
            ]
        ],

        [
            "no" => 2, "nama" => "Ratna",
            "mk" => [
                ["mataKuliah" => "Basis Data I", "sks" => 2],
                ["mataKuliah" => "Praktikum Basis Data I", "sks" => 1],
                ["mataKuliah" => "Kalkulus", "sks" => 3]
            ]
        ],

        [
            "no" => 3, "nama" => "Tono",
            "mk" => [
                ["mataKuliah" => "Rekayasa Perangkat Lunak", "sks" => 3],
                ["mataKuliah" => "Analisis dan Perancangan Sistem", "sks" => 3],
                ["mataKuliah" => "Komputasi Awan", "sks" => 3],
                ["mataKuliah" => "Kecerdasan Bisnis", "sks" => 3]
            ]
        ]
    ];
    ?>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Mata Kuliah diambil</td>
            <td>SKS</td>
            <td>Total SKS</td>
            <td>Keterangan</td>
        </tr>
        <?php
        for ($i = 0; $i < count($data); $i++) {
            $jumlah = 0;
            for ($j = 0; $j < count($data[$i]["mk"]); $j++) {
                $jumlah += $data[$i]["mk"][$j]["sks"];
            }
            $data[$i]["jumlah"] = $jumlah;
            if ($data[$i]["jumlah"] < 7) {
                $data[$i]["keterangan"] = "<div style=background-color:#ff4f4f>Revisi KRS</div>";
            } else {
                $data[$i]["keterangan"] = "<div style=background-color:#7bfc44>Tidak Revisi";
            }
        }

        for ($i = 0; $i < count($data); $i++) {
            for ($j = 0; $j < count($data[$i]["mk"]); $j++) {
                echo "<tr>";
                if ($j == 0) {
                    echo "<td>" . $data[$i]["no"] . "</td>";
                    echo "<td>" . $data[$i]["nama"] . "</td>";
                    echo "<td>" . $data[$i]["mk"][$j]["mataKuliah"] . "</td>";
                    echo "<td>" . $data[$i]["mk"][$j]["sks"] . "</td>";
                    echo "<td>" . $data[$i]["jumlah"] . "</td>";
                    echo "<td>" . $data[$i]["keterangan"] . "</td>";
                } else {
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>" . $data[$i]["mk"][$j]["mataKuliah"] . "</td>";
                    echo "<td>" . $data[$i]["mk"][$j]["sks"] . "</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
        ?>
        
    </table>
</body>
</html>