<?= $this->extend('SablonVebStorinky') ?>
<?= $this->section('sekcija') ?>
<h2>👤 <?= esc($username) ?></h2>

<h3>Clicks: <?= esc($count) ?></h3>

<form method="post" action="<?= site_url('click') ?>">
<button type="submit">
        Click me
    </button>
</form>

<br>

<a href="<?= site_url('logout') ?>">Logout</a>
<?= $this->endSection() ?>