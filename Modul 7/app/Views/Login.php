<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body {
            background-image: url('/Images/bg.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="form-title">Library System</h2>
        <img src="/Images/Perpus.png" alt="Ilustrasi Register" style="display:block; margin: 0 auto 20px; width: 100px; height: auto;">
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="error-message">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="/login">
            <?= csrf_field() ?>
            <div class="form-group">
                <input type="text" class="input-form" name="username" placeholder="Username" required>
            </div>

            <div class="form-group">
                <input type="password" class="input-form" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="submit-button">Login</button>
        </form>

        <p class="link-text">Belum punya akun? <a href="/register">Daftar di sini</a></p>
    </div>
</body>
</html>
