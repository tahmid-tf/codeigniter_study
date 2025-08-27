<?= $this->extend("header") ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Welcome</h1>

<?php if (auth()->loggedIn()): ?>
        <p>Username : <?php echo(auth()->user()->email) ?></p>
        <a href="<?= route_to('logout') ?>">Logout</a>
<?php else: ?>
    <a href="<?= route_to('login') ?>">Login</a>
<?php endif; ?>

<?= $this->endSection() ?>

