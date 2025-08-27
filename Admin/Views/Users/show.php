<?= $this->extend('layouts/default.php') ?>

<?= $this->section('title') ?>User <?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>User</h1>

    <dl>
        <dt>email</dt>
        <dd><?= esc($user->email) ?></dd>

        <dt>First Name</dt>
        <dd><?= esc($user->first_name) ?></dd>

        <dt>Created</dt>
        <dd><?= esc($user->created_at) ?></dd>
    </dl>


<?= $this->endSection() ?>