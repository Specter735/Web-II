<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .merah {
            color: red;
            font-weight: bold;
        }

        .hijau { 
            color: green;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <form action="" method="post">
        Jumlah Peserta <input type="number" name="peserta" required><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $jumlah = (int)$_POST['peserta'];
            $i = 1;

            while($i <= $jumlah){
                if ($i % 2 == 1) {
                    echo "<p class='merah'>Peserta ke-$i</p>";
                } else {
                    echo "<p class='hijau'>Peserta ke-$i</p>";
                }
                $i++;
            }
        }
    ?>
</body>
</html>