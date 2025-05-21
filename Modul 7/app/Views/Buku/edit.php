<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Sistem Informasi Perpustakaan</span>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Edit Buku</h5>
            </div>
            <div class="card-body">
                <form method="post" action="/buku/update/<?= $buku['id'] ?>">
                    <div class="mb-3">
                        <label class="form-label">ID Buku</label>
                        <input type="text" class="form-control bg-light" value="<?= esc($buku['id']) ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?= esc($buku['judul']) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penulis</label>
                        <input type="text" class="form-control" name="penulis" placeholder="Penulis" value="<?= esc($buku['penulis']) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" value="<?= esc($buku['penerbit']) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun Terbit</label>
                        <input type="number" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit" value="<?= esc($buku['tahun_terbit']) ?>">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-info me-2 text-white">Simpan</button>
                        <a href="/buku" class="btn btn-warning text-white">Batal</a>
                    </div>
                </form>

                <?php if (session()->getFlashdata('errors')): ?>
                    <div class="alert alert-danger mt-3">
                        <ul class="mb-0">
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>

</body>
</html>
