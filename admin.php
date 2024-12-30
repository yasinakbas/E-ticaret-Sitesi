<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
</head>
<body>
    <h1>Admin Paneli</h1>
    <a href="/logout">Çıkış Yap</a>

    <h2>Kullanıcı Ekle</h2>
    <form method="post" action="/admin/addUser">
        <input type="text" name="username" placeholder="Kullanıcı Adı" required><br>
        <input type="password" name="password" placeholder="Şifre" required><br>
        <button type="submit">Ekle</button>
    </form>

    <h2>Kullanıcı Listesi</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Kullanıcı Adı</th>
            <th>Sil</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><a href="/admin/deleteUser/<?= $user['id'] ?>">Sil</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
