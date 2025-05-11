<?php
require 'Koneksi.php';
require 'Model.php';

$id = '';
$member_id = '';
$buku_id = '';
$tgl_pinjam = '';
$tgl_kembali = '';

// Mode Edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = getPeminjamanById($id);
    if ($result) {
        $peminjaman = mysqli_fetch_assoc($result);
        $member_id = $peminjaman['id_member'];
        $buku_id = $peminjaman['id_buku'];
        $tgl_pinjam = $peminjaman['tgl_pinjam'];
        $tgl_kembali = $peminjaman['tgl_kembali'];
    }
}

// Proses Simpan (Insert atau Update)
if (isset($_POST['simpan'])) {
    $member_id = $_POST['member'];
    $buku_id = $_POST['buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if ($id) {
        updatePeminjaman($id, $member_id, $buku_id, $tgl_pinjam, $tgl_kembali);
    } else {
        insertPeminjaman($member_id, $buku_id, $tgl_pinjam, $tgl_kembali);
    }

    header("Location: Peminjaman.php");
    exit;
}

// Ambil semua data untuk dropdown
$dataMember = getAllMember();
$dataBuku = getAllBuku();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
</head>
<body>
    <h2><?= $id ? 'Edit' : 'Tambah' ?> Data Peminjaman</h2>
    <form method="POST">
        <label>Member:</label><br>
        <select name="member" required>
            <option value="">-- Pilih Member --</option>
            <?php while ($m = mysqli_fetch_assoc($dataMember)): ?>
                <option value="<?= $m['id_member'] ?>" <?= $member_id == $m['id_member'] ? 'selected' : '' ?>>
                    <?= $m['nama_member'] ?>
                </option>
            <?php endwhile; ?>
        </select><br><br>

        <label>Buku:</label><br>
        <select name="buku" required>
            <option value="">-- Pilih Buku --</option>
            <?php while ($b = mysqli_fetch_assoc($dataBuku)): ?>
                <option value="<?= $b['id_buku'] ?>" <?= $buku_id == $b['id_buku'] ? 'selected' : '' ?>>
                    <?= $b['judul_buku'] ?>
                </option>
            <?php endwhile; ?>
        </select><br><br>

        <label>Tanggal Pinjam:</label><br>
        <input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam ?>" required><br><br>

        <label>Tanggal Kembali:</label><br>
        <input type="date" name="tgl_kembali" value="<?= $tgl_kembali ?>" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>
    <br>
    <a href="Peminjaman.php">Kembali ke Daftar Peminjaman</a>
</body>
</html>
