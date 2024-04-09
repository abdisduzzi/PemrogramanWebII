<!DOCTYPE html>
<html>
<head>
    <style>
        table, tr, td, th{
            border: 1px solid black;
        }
    </style>
    <title>PRAK105</title>
</head>
<body>
    <table>
        <tr style="background-color: red; height: 70px; font-size: 24px">
            <th>Daftar Smartphone Samsung</th>
        </tr>

        <?php
            $samsung_devices = array("samsung1"=>"Samsung Galaxy S22", "samsung2"=>"Samsung Galaxy S22+", "samsung3"=>"Samsung Galaxy A03", "samsung4"=>"Samsung Galaxy Xcover 5");
            foreach ($samsung_devices as $device) {
                echo "<tr>";
                echo "<td>" . $device . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>