<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Güncelle</title>
</head>
<body>

<h1>Kullanıcı Güncelle</h1>

<form method="post" action="/admin/updateUser/<?= $user['id']; ?>">
    <label for="username">Kullanıcı Adı:</label>
    <input type="text" name="username" id="username" value="<?= $user['username']; ?>" required><br><br>

    <label for="password">Yeni Şifre:</label>
    <input type="password" name="password" id="password" required><br><br>

    <button type="submit">Güncelle</button>
</form>

</body>
</html>
