<!DOCTYPE html>
<html>
<head>
    <style>
        table, tr, td, th{
            border: 1px solid black;
        }
    </style>
    <title>PRAK104</title>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>

        <?php
            $samsung_devices = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
            foreach ($samsung_devices as $device) {
                echo "<tr>";
                echo "<td>" . $device . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>