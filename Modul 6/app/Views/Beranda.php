<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("<?= base_url('images/bg.jpg') ?>");
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container-box {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid white;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
        }

        p {
            font-size: 16px;
        }

        .btn-profil {
            margin-top: 20px;
            background-color: #ffffff;
            color: #000;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
            text-decoration: none;
        }

        .btn-profil:hover {
            background-color: #0072ff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container-box">
        <img src="<?= base_url('images/Junn.jpg') ?>" alt="Foto Profil" class="profile-img">
        <h1><?= $nama; ?></h1>
        <p><strong>NIM:</strong> <?= $nim; ?></p>
        <a href="<?= base_url('web/profil') ?>" class="btn-profil">Lihat Profil</a>
    </div>
</body>
</html>
