<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konversi Suhu</title>
</head>
<body>

<h3>Konversi Suhu</h3>

<form method="post" action="">
    Nilai: <input type="number" name="nilai" step="any" required><br><br>

    Dari: <br>
    <input type="radio" name="dari" value="C" required> Celcius <br>
    <input type="radio" name="dari" value="F"> Fahrenheit <br>
    <input type="radio" name="dari" value="Re"> Rheaumur <br>
    <input type="radio" name="dari" value="K"> Kelvin <br><br>

    Ke: <br>
    <input type="radio" name="ke" value="C" required> Celcius <br>
    <input type="radio" name="ke" value="F"> Fahrenheit <br>
    <input type="radio" name="ke" value="Re"> Rheaumur <br>
    <input type="radio" name="ke" value="K"> Kelvin <br><br>

    <input type="submit" name="submit" value="Konversi">
</form>

<?php
if (isset($_POST['submit'])) {
    $nilai = $_POST['nilai'];
    $dari = $_POST['dari'];
    $ke = $_POST['ke'];

    switch ($dari) {
        case "C":
            $celcius = $nilai;
            break;
        case "F":
            $celcius = ($nilai - 32) * 5 / 9;
            break;
        case "Re":
            $celcius = $nilai * 5 / 4;
            break;
        case "K":
            $celcius = $nilai - 273.15;
            break;
    }

    switch ($ke) {
        case "C":
            $hasil = $celcius;
            $satuan = "°C";
            break;
        case "F":
            $hasil = ($celcius * 9 / 5) + 32;
            $satuan = "°F";
            break;
        case "Re":
            $hasil = $celcius * 4 / 5;
            $satuan = "°Re";
            break;
        case "K":
            $hasil = $celcius + 273.15;
            $satuan = "K";
            break;
    }

    echo "<h3>Hasil Konversi: " . round($hasil, 1) . " $satuan</h3>";
}
?>

</body>
</html>
