<form action="/code/public/sayfalar/iletisim" method="POST">
    <label for="name">Adınız:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">E-posta:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Mesajınız:</label>
    <textarea id="message" name="message" rows="5" required></textarea><br><br>

    <button type="submit">Gönder</button>
</form>
<?php if (session()->getFlashdata('success')): ?>
    <p style="color: green;"><?php echo session()->getFlashdata('success'); ?></p>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;"><?php echo session()->getFlashdata('error'); ?></p>
<?php endif; ?>
