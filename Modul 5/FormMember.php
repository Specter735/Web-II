<?php
require 'Koneksi.php';
require 'Model.php';

$id = '';
$nama = '';
$nomor = '';
$alamat = '';
$tanggal_mendaftar = '';
$tanggal_bayar = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = getMemberById($id);
    if ($result && mysqli_num_rows($result) > 0) {
        $member = mysqli_fetch_assoc($result);
        $nama = $member['nama_member'];
        $nomor = $member['nomor_member'];
        $alamat = $member['alamat'];
        $tanggal_mendaftar = $member['tgl_mendaftar'];
        $tanggal_bayar = $member['tgl_terakhir_bayar'];
    }
}

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
    $tanggal_mendaftar = $_POST['tgl_mendaftar'];
    $tanggal_bayar = $_POST['tgl_terakhir_bayar'];

    if ($id) {
        updateMember($id, $nama, $nomor, $alamat, $tanggal_mendaftar, $tanggal_bayar);
    } else {
        insertMember($nama, $nomor, $alamat, $tanggal_mendaftar, $tanggal_bayar);
    }

    header("Location: Member.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Member</title>
</head>
<body>
<h2><?= $id ? 'Edit' : 'Tambah' ?> Member</h2>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $nama ?>" required><br><br>

        <label>Nomor Member:</label><br>
        <input type="text" name="nomor" value="<?= $nomor ?>" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required><?= $alamat ?></textarea><br><br>

        <label>Tanggal Mendaftar:</label><br>
        <input type="date" name="tgl_mendaftar" value="<?= $tanggal_mendaftar ?>" required><br><br>

        <label>Tanggal Terakhir Bayar:</label><br>
        <input type="date" name="tgl_terakhir_bayar" value="<?= $tanggal_bayar ?>" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>
    <br>
    <a href="Member.php">Kembali ke Daftar Member</a>
</body>
</html>
