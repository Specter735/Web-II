<?php
require_once("Model.php");
$data = getAllMember();

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    deleteMember($id);
    header("Location: Member.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Member</title>
</head>
<body>
    <h2>Data Member</h2>
    <a href="FormMember.php">+ Tambah Member</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor</th>
            <th>Alamat</th>
            <th>Tgl Mendaftar</th>
            <th>Tgl Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($data)) : ?>
            <tr>
                <td><?= $row['id_member'] ?></td>
                <td><?= $row['nama_member'] ?></td>
                <td><?= $row['nomor_member'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['tgl_mendaftar'] ?></td>
                <td><?= $row['tgl_terakhir_bayar'] ?></td>
                <td>
                    <a href="FormMember.php?id=<?= $row['id_member'] ?>">Edit</a> |
                    <a href="Member.php?hapus=<?= $row['id_member'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="Buku.php">Ke Data Buku</a> | <a href="Peminjaman.php">Ke Data Peminjaman</a>
</body>
</html>
