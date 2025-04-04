<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            border: 1px solid black;
            width: max-content;
        }
        .header {
            border: 1px solid black;
            margin: 2px;
            background-color: red;
            color: black;
            font-size: 20px;
            font-weight: bold;
            text-align: justify;
            padding: 15px 0px;
        }
        .list {
            border: 1px solid black;
            margin: 2px;
            padding: 5 px;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="header">Daftar Smartphone Samsung</div>
        <?php
            $smartphone = [
                "S22" => "Samsung Galaxy S22",
                "S22+" => "Samsung Galaxy S22+",
                "A03" => "Samsung Galaxy A03",
                "Xcover5" => "Samsung Galaxy Xcover 5"
            ];

            foreach ($smartphone as $phone) {
                echo "<div class='list'>$phone</div>";
            }
        ?>    
    </div>
</body>
</html>