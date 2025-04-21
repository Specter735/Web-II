<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejaan Bilangan</title>
</head>
<body>

<form method="post" action="">
    Nilai : <input type="number" name="nilai" required><br>
    <input type="submit" name="submit" value="Konversi">
</form>

<?php
if (isset($_POST['submit'])) {
    $angka = $_POST['nilai'];

    echo "<h3>Hasil: ";

    if ($angka < 0 || $angka >= 1000) {
        echo "Anda Menginput Melebihi Limit Bilangan";
    } elseif ($angka == 0) {
        echo "Nol";
    } elseif ($angka < 10) {
        echo "Satuan";
    } elseif ($angka < 20) {
        echo "Belasan";
    } elseif ($angka < 100) {
        echo "Puluhan";
    } else {
        echo "Ratusan";
    }

    echo "</h3>";
}
?>

</body>
</html>
