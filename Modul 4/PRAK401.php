<!DOCTYPE html>
<html>
<head>
    <title>PRak401</title>
</head>
<body>

<?php
$panjang = $_POST['panjang'] ?? '';
$lebar = $_POST['lebar'] ?? '';
$nilaiInput = $_POST['nilai'] ?? '';
?>

<form method="post">
    Panjang : <input type="number" name="panjang" value="<?php echo $panjang; ?>" required><br>
    Lebar : <input type="number" name="lebar" value="<?php echo $lebar; ?>"required><br>
    Nilai : <input type="text" name="nilai" value="<?php echo htmlspecialchars($nilaiInput); ?>" required><br>
    <input type="submit" name="cetak" value="Cetak">
</form>

<?php
if (isset($_POST['cetak'])) {
    $nilaiArray = explode(" ", trim($nilaiInput));
    $jumlahNilai = count($nilaiArray);

    if ($jumlahNilai != $panjang * $lebar) {
        echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
    } else {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        $index = 0;
        for ($i = 0; $i < $panjang; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $lebar; $j++) {
                echo "<td>" . $nilaiArray[$index] . "</td>";
                $index++;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>

</body>
</html>
