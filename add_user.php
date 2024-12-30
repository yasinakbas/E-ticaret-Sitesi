<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Kullanıcı Ekle</title>
</head>
<body>

<h1>Yeni Kullanıcı Ekle</h1>

<form method="post" action="/admin/addUser">
    <label for="username">Kullanıcı Adı:</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="password">Şifre:</label>
    <input type="password" name="password" id="password" required><br><br>

    <button type="submit">Ekle</button>
</form>

</body>
</html>
