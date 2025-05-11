<?php
require 'Koneksi.php';
require 'Model.php';

// Jika ada parameter hapus
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    deletePeminjaman($id);
    header("Location: Peminjaman.php");
    exit;
}

$dataPeminjaman = getAllPeminjaman();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
</head>
<body>
    <h2>Data Peminjaman</h2>
    <a href="FormPeminjaman.php">Tambah Peminjaman</a><br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Peminjaman</th>
            <th>Member</th>
            <th>Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php while ($pinjam = mysqli_fetch_assoc($dataPeminjaman)): ?>
        <tr>
            <td><?= $pinjam['id_peminjaman'] ?></td>
            <td><?= $pinjam['nama_member'] ?></td>
            <td><?= $pinjam['judul_buku'] ?></td>
            <td><?= $pinjam['tgl_pinjam'] ?></td>
            <td><?= $pinjam['tgl_kembali'] ?></td>
            <td>
                <a href="FormPeminjaman.php?id=<?= $pinjam['id_peminjaman'] ?>">Edit</a> |
                <a href="Peminjaman.php?hapus=<?= $pinjam['id_peminjaman'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="Member.php">Ke Data Member</a> | <a href="Buku.php">Ke Data Buku</a>
</body>
</html>
