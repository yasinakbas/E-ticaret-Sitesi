<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
</head>
<body>
    <h1>Giriş Yap</h1>
    <form method="post" action="<?= base_url('login') ?>">
        <input type="text" name="username" placeholder="Kullanıcı Adı" required><br>
        <input type="password" name="password" placeholder="Şifre" required><br>
        <button type="submit">Giriş Yap</button>
    </form>
    <?php if (isset($error)) : ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
</body>
</html>
