<!DOCTYPE html>
<html>
<head>
    <title>Ulangi Karakter String</title>
</head>
<body>

<form method="post">
    <input type="text" name="teks">
    <input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $input = $_POST['teks'];
    $panjang = strlen($input);

    echo "<br><strong>Input:</strong><br>";
    echo htmlspecialchars($input) . "<br><br>";

    echo "<strong>Output:</strong><br>";

    $i = 0;
    while ($i < $panjang) {
        $huruf = $input[$i];
        $output = strtoupper($huruf);

        $j = 1;
        while ($j < $panjang) {
            $output .= strtolower($huruf);
            $j++;
        }

        echo $output;
        $i++;
    }
}
?>

</body>
</html>
