<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Praktikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('<?= base_url('images/bg.jpg'); ?>') no-repeat center center fixed;
            background-size: cover;
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }

        .profile-container {
            margin-top: 5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .left-box {
            text-align: center;
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 30px;
            backdrop-filter: blur(6px);
            border-radius: 12px;
        }

        .left-box img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid white;
            margin-bottom: 15px;
        }

        .left-box h2 {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .left-box p {
            color: #f8c400;
            font-weight: 500;
        }

        .right-box {
            margin-left: 40px;
            max-width: 500px;
            backdrop-filter: blur(6px);
        }

        .right-box h3 {
            border-bottom: 1px solid #0ef;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .right-box p {
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .btn-kembali {
            margin-top: 30px;
        }

        @media(max-width: 768px) {
            .right-box {
                margin-left: 0;
                margin-top: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="container profile-container">
        <div class="left-box">
            <img src="<?= base_url('images/Junn.jpg'); ?>" alt="Foto Profil">
            <h2><?= $nama; ?></h2>
            <p><?= $prodi; ?></p>
        </div>
        <div class="right-box">
            <h3>Profil Praktikan</h3>
            <p><strong>Nama :</strong> <?= $nama; ?></p>
            <p><strong>NIM :</strong> <?= $nim; ?></p>
            <p><strong>Prodi :</strong> <?= $prodi; ?></p>
            <p><strong>Hobi :</strong> <?= $hobi; ?></p>
            <p><strong>Skill :</strong> <?= $skill; ?></p>
            <p><strong>Tentang Saya :</strong> <?= $desc; ?></p>
            <a href="<?= base_url('web/beranda'); ?>" class="btn btn-outline-light btn-kembali">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
