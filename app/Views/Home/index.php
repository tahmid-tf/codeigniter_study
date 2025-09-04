<?= $this->extend("header") ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Welcome</h1>

<?php if (auth()->loggedIn()): ?>

    <?php if (session()->has('error')): ?>
        <p><?= session('error') ?></p>
    <?php endif ?>


    <p><?= 'User logged in as: ' . implode(', ', auth()->user()->getGroups()) ?></p>

    <p>Username : <?php echo(auth()->user()->email) ?></p>
    <a href="<?= route_to('logout') ?>">Logout</a>
<?php else: ?>
    <a href="<?= route_to('login') ?>">Login</a>
<?php endif; ?>

<?= $this->endSection() ?>

