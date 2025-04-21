<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nama: 1 <input type="text" name="nama1"><br>
        Nama: 2 <input type="text" name="nama2"><br>
        Nama: 3 <input type="text" name="nama3"><br>
        <input type="submit" name="submit" value="Urutkan">
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['nama1'];
        $b = $_POST['nama2'];
        $c = $_POST['nama3'];

        echo "<h3>Output</h3>";

        if ($a <= $b && $a <= $c) {
            echo $a . "<br>";
            if ($b <= $c) {
                echo $b . "<br>";
                echo $c . "<br>";
            } else {
                echo $c . "<br>";
                echo $b . "<br>";
            }
        } elseif ( $b <= $a && $b <= $c) {
            echo $b . "<br>";
            if ($a <= $c) {
                echo $a . "<br>";
                echo $c . "<br>";
            } else {
                echo $c . "<br>";
                echo $a . "<br>";
            }
        } else {
            echo $c . "<br>";
            if ($a <= $b) {
                echo $a . "<br>";
                echo $b . "<br>";
            } else {
                echo $b . "<br>";
                echo $a . "<br>";
            }
        }
    }
    ?>
</body>
</html>