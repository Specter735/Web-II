<?php
require 'Koneksi.php';
require 'Model.php';

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    deleteBuku($id);
    header("Location: Buku.php");
    exit;
}

$dataBuku = getAllBuku();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
</head>
<body>
    <h2>Data Buku</h2>
    <a href="FormBuku.php">+ Tambah Buku</a><br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php while ($buku = mysqli_fetch_assoc($dataBuku)) : ?>
        <tr>
            <td><?= htmlspecialchars($buku['id_buku']) ?></td>
            <td><?= htmlspecialchars($buku['judul_buku']) ?></td>
            <td><?= htmlspecialchars($buku['penulis']) ?></td>
            <td><?= htmlspecialchars($buku['penerbit']) ?></td>
            <td><?= htmlspecialchars($buku['tahun_terbit']) ?></td>
            <td>
                <a href="FormBuku.php?id=<?= $buku['id_buku'] ?>">Edit</a> |
                <a href="Buku.php?hapus=<?= $buku['id_buku'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="Member.php">Ke Data Member</a> | <a href="Peminjaman.php">Ke Data Peminjaman</a>
</body>
</html>
