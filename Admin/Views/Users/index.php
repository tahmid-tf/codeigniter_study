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
            <th>Banned</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><a href="<?= route_to('user_show', $user->id) ?>"><?= esc($user->email) ?></a></td>
                <td><?= esc($user->first_name) ?></td>
                <td><?= yesno($user->active) ?></td>
                <td><?= yesno($user->isBanned()) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?= $pager->links('default', 'bootstrap_full') ?>

<?= $this->endSection() ?>