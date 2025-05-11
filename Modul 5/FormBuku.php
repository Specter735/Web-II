<?php
require 'Koneksi.php';
require 'Model.php';

$id = '';
$judul = '';
$penulis = '';
$penerbit = '';
$tahun = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = getBukuById($id);
    if ($result && mysqli_num_rows($result) > 0) {
        $buku = mysqli_fetch_assoc($result);
        $judul = $buku['judul_buku'];
        $penulis = $buku['penulis'];
        $penerbit = $buku['penerbit'];
        $tahun = $buku['tahun_terbit'];
    }
}

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    if ($id) {
        updateBuku($id, $judul, $penulis, $penerbit, $tahun);
    } else {
        insertBuku($judul, $penulis, $penerbit, $tahun);
    }

    header("Location: Buku.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Buku</title>
</head>
<body>
    <h2><?= $id ? 'Edit' : 'Tambah' ?> Data Buku</h2>
    <form method="POST">
        <label>Judul Buku:</label><br>
        <input type="text" name="judul" value="<?= htmlspecialchars($judul) ?>" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="<?= htmlspecialchars($penulis) ?>" required><br><br>

        <label>Penerbit:</label><br>
        <input type="text" name="penerbit" value="<?= htmlspecialchars($penerbit) ?>" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun" value="<?= htmlspecialchars($tahun) ?>" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>
    <br>
    <a href="Buku.php">Kembali ke Daftar Buku</a>
</body>
</html>
