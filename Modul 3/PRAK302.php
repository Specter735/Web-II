<!DOCTYPE html>
<html>
<head>
    <title>Segitiga Rata Kanan Menurun</title>
    <style>
        body {
            font-family: Arial;
        }

        form {
            margin-bottom: 20px;
        }

        .output-container {
            width: fit-content;
            text-align: left;
        }

        .segitiga {
            line-height: 0;
            font-size: 0;
        }

        .baris {
            height: 32px;
            text-align: right;
            white-space: nowrap;
        }

        .baris img {
            width: 30px;
            height: 30px;
            margin-left: 2px;
        }
    </style>
</head>
<body>

<form method="post">
    Tinggi : <input type="text" name="tinggi"><br>
    Alamat Gambar : <input type="text" name="gambar"><br>
    <input type="submit" name="cetak" value="Cetak">
</form>

<?php
if (isset($_POST['cetak'])) {
    $tinggi = intval($_POST['tinggi']);
    $gambar = $_POST['gambar'];

    if ($tinggi > 0 && filter_var($gambar, FILTER_VALIDATE_URL)) {
        echo "<div class='output-container'>";
        echo "<div class='segitiga'>";
        $i = 0;
        while ($i < $tinggi) {
            echo "<div class='baris'>";

            $spasi = 0;
            while ($spasi < $i) {
                echo "<span style='display:inline-block; width:32px;'></span>";
                $spasi++;
            }

            $j = $tinggi - $i;
            while ($j > 0) {
                echo "<img src='$gambar'>";
                $j--;
            }

            echo "</div>";
            $i++;
        }
        echo "</div></div>";
    } else {
        echo "Masukkan input yang valid!";
    }
}
?>

</body>
</html>
