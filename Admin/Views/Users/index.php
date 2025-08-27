<?= $this->extend('layouts/default.php') ?>

<?= $this->section('title') ?>Users <?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>Users</h1>

    <table>
        <thead>
        <tr>
            <th>Email</th>
            <th>First Name</th>
            <th>Activate</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= esc($user->email) ?></td>
                <td><?= esc($user->first_name) ?></td>
                <td><?= esc($user->active) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?= $pager->links('default', 'bootstrap_full') ?>

<?= $this->endSection() ?>