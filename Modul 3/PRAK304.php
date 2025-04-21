<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kurang Bintang</title>
    <style>
        img {
            width: 40px;
            height: 40px;
        }
        .bintang {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php
$jumlah = 0;

if (isset($_POST['submit'])) {
    $jumlah = intval($_POST['jumlah']);
}

if (isset($_POST['tambah'])) {
    $jumlah = intval($_POST['jumlah']) + 1;
} elseif (isset($_POST['kurang'])) {
    $jumlah = max(0, intval($_POST['jumlah']) - 1);
}
?>

<form method="post">
    Jumlah bintang: <input type="number" name="jumlah" value="<?= $jumlah ?>"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php if ($jumlah > 0): ?>
    <div class="bintang">
        <p>Jumlah bintang: <?= $jumlah ?></p>
        <?php
        $i = 0;
        while ($i < $jumlah) {
            echo "<img src='star-images-9441.png'>";
            $i++;
        }
        ?>

        <form method="post" style="margin-top: 10px;">
            <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang">
        </form>
    </div>
<?php endif; ?>

</body>
</html>
