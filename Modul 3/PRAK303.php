<!DOCTYPE html>
<html>
<head>
    <title>Deret Bilangan & Bintang</title>
    <style>
        .output img {
            width: 20px;
            vertical-align: middle;
        }
        .output {
            margin-top: 15px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<form method="post">
    Batas Bawah : <input type="number" name="bawah"><br>
    Batas Atas : <input type="number" name="atas"><br>
    <input type="submit" name="cetak" value="Cetak">
</form>

<?php
if (isset($_POST['cetak'])) {
    $bawah = intval($_POST['bawah']);
    $atas = intval($_POST['atas']);
    $gambar = "star-images-9441.png";

    if ($bawah <= $atas) {
        echo "<div class='output'>";
        $i = $bawah;
        do {
            $cek = $i + 7;
            if ($cek % 5 == 0) {
                echo "<img src='$gambar' alt='bintang'>";
            } else {
                echo "$i ";
            }
            $i++;
        } while ($i <= $atas);
        echo "</div>";
    } else {
        echo "Batas bawah harus lebih kecil atau sama dengan batas atas.";
    }
}
?>

</body>
</html>
