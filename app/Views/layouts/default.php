<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

<nav>

    <a href="<?= url_to('/') ?>">Home</a>

    <?php if (auth()->loggedIn()): ?>
        <p>Hello <?= esc(auth()->user()->first_name) ?></p>

        <a href="<?= url_to('articles') ?>">Articles</a>

        <a href="<?= url_to('admin/users') ?>">Users</a>

        <a href="<?= url_to('logout') ?>">Logout</a>

    <?php else: ?>
        <a href="<?= url_to('login') ?>">Login</a>
    <?php endif; ?>
</nav>

<?php if (session()->has('message')): ?>
    <p><?= session('message') ?></p>
<?php endif; ?>

<?php if (session()->has('error')): ?>
    <p><?= session('error') ?></p>
<?php endif ?>

<?= $this->renderSection('content') ?>
</body>
</html>