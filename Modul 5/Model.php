<?php
require_once("Koneksi.php");

// tabel member
function getAllMember() {
    global $koneksi;
    return mysqli_query($koneksi, "SELECT * FROM member");
}

function getMemberById($id) {
    global $koneksi;
    $stmt = $koneksi->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result();
}

function insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar) {
    global $koneksi;
    $stmt = $koneksi->prepare("INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar);
    return $stmt->execute();
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar) {
    global $koneksi;
    $stmt = $koneksi->prepare("UPDATE member SET nama_member = ?, nomor_member = ?, alamat = ?, tgl_mendaftar = ?, tgl_terakhir_bayar = ? WHERE id_member = ?");
    $stmt->bind_param("sssssi", $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar, $id);
    return $stmt->execute();
}

function deleteMember($id) {
    global $koneksi;
    $stmt = $koneksi->prepare("DELETE FROM member WHERE id_member = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// tabel buku
function getAllBuku() {
    global $koneksi;
    return mysqli_query($koneksi, "SELECT * FROM buku");
}

function getBukuById($id) {
    global $koneksi;
    $stmt = $koneksi->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result();
}

function insertBuku($judul, $penulis, $penerbit, $tahun) {
    global $koneksi;
    $stmt = $koneksi->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $judul, $penulis, $penerbit, $tahun);
    return $stmt->execute();
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    global $koneksi;
    $stmt = $koneksi->prepare("UPDATE buku SET judul_buku = ?, penulis = ?, penerbit = ?, tahun_terbit = ? WHERE id_buku = ?");
    $stmt->bind_param("sssii", $judul, $penulis, $penerbit, $tahun, $id);
    return $stmt->execute();
}

function deleteBuku($id) {
    global $koneksi;
    $stmt = $koneksi->prepare("DELETE FROM buku WHERE id_buku = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// tabel pinjam buku
function getAllPeminjaman() {
    global $koneksi;
    $query = "SELECT p.id_peminjaman, p.tgl_pinjam, p.tgl_kembali,
                     m.nama_member, b.judul_buku
              FROM peminjaman p
              JOIN member m ON p.id_member = m.id_member
              JOIN buku b ON p.id_buku = b.id_buku";
    return mysqli_query($koneksi, $query);
}

function getPeminjamanById($id) {
    global $koneksi;
    $stmt = $koneksi->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result();
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    global $koneksi;
    $stmt = $koneksi->prepare("INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    return $stmt->execute();
}

function updatePeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    global $koneksi;
    $stmt = $koneksi->prepare("UPDATE peminjaman SET id_member = ?, id_buku = ?, tgl_pinjam = ?, tgl_kembali = ? WHERE id_peminjaman = ?");
    $stmt->bind_param("iissi", $id_member, $id_buku, $tgl_pinjam, $tgl_kembali, $id);
    return $stmt->execute();
}

function deletePeminjaman($id) {
    global $koneksi;
    $stmt = $koneksi->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>
