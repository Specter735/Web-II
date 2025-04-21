<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validasi Data Diri</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

<?php
$nama = $nim = $gender = "";
$namaErr = $nimErr = $genderErr = "";
$showOutput = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nama
    if (empty($_POST["nama"])) {
        $namaErr = "* nama tidak boleh kosong";
    } else {
        $nama = htmlspecialchars($_POST["nama"]);
    }

    // NIM
    if (empty($_POST["nim"])) {
        $nimErr = "* nim tidak boleh kosong";
    } else {
        $nim = htmlspecialchars($_POST["nim"]);
    }

    // Jenis Kelamin
    if (empty($_POST["gender"])) {
        $genderErr = "* jenis kelamin tidak boleh kosong";
    } else {
        $gender = $_POST["gender"];
    }

    // hasil jika semua valid
    if ($nama && $nim && $gender) {
        $showOutput = true;
    }
}
?>

<form method="post" action="">
    Nama: <input type="text" name="nama" value="<?php echo $nama; ?>">
    <span class="error"><?php echo $namaErr; ?></span><br>

    Nim: <input type="text" name="nim" value="<?php echo $nim; ?>">
    <span class="error"><?php echo $nimErr; ?></span><br>

    Jenis Kelamin: 
    <span class="error"><?php echo $genderErr; ?></span><br>
    <input type="radio" name="gender" value="Laki-laki" <?php if ($gender == "Laki-laki") echo "checked"; ?>> Laki-laki <br>
    <input type="radio" name="gender" value="Perempuan" <?php if ($gender == "Perempuan") echo "checked"; ?>> Perempuan <br>

    <input type="submit" value="Submit">
</form>

<?php
if ($showOutput) {
    echo "<h3>Output:</h3>";
    echo $nama . "<br>";
    echo $nim . "<br>";
    echo $gender . "<br>";
}
?>

</body>
</html>
