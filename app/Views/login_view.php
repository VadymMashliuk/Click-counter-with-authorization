<?= $this->extend('SablonVebStorinky') ?>
<?= $this->section('sekcija') ?>
<h2>Login</h2>

<?php if(session()->getFlashdata('error')): ?>
    <p style="color:red;">
        <?= session()->getFlashdata('error') ?>
    </p>
<?php endif; ?>

<form method="post" action="<?= site_url('login') ?>">

    <input type="text"
           name="username"
           placeholder="Username"
           required>

    <br><br>

    <input type="password"
           name="password"
           placeholder="Password"
           required>
 <br>Введіть Username: user, Password: password
    <br><br>

    <button type="submit">
        Login
    </button>

</form>
<?= $this->endSection() ?>