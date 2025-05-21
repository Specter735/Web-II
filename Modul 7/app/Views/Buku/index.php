<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background-image: url('/images/bg.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            
        }
        .container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            margin-top: 200px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Library</span>
        </div>
    </nav>

    <div class="container mt-4">
        <h3 class="text-center mb-3">Data Buku</h3>
        <div class="mb-3 text-start">
            <a href="/buku/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
            <a href="/auth/logout" class="btn btn-outline-danger logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <table id="tabelBuku" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Kelola</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($buku as $b) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($b['judul']) ?></td>
                        <td><?= esc($b['penulis']) ?></td>
                        <td><?= esc($b['penerbit']) ?></td>
                        <td><?= esc($b['tahun_terbit']) ?></td>
                        <td>
                            <a href="/buku/edit/<?= $b['id'] ?>" class="btn btn-success btn-sm me-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="/buku/delete/<?= $b['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tabelBuku').DataTable();
        });
    </script>
</body>
</html>
