<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            border: 1px solid black;
            border-width: 2px 1px 1px 1px;
        }
        th, td {
            border: 1px solid black;
            text-align: left;
        }
        th {
            background-color:rgb(255, 255, 255);
            font-weight: bold;
        }
    </style>
</head>
<body>
    
<?php
$smartphone = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
?>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php
    foreach ($smartphone as $phone) {
        echo "<tr><td>$phone</td></tr>";
    }
    ?>
</table>
</body>
</html>