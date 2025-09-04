<?= $this->extend('layouts/default.php') ?>

<?= $this->section('title') ?>User Groups<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>User Groups</h1>

    <form action="<?= base_url('admin/users' . $user->id . '/groups') ?>" method="post">
        <label for="">
            <input type="checkbox" name="groups[]" value="user"
                    <?= $user->inGroup('user') ? 'checked' : '' ?>
            />User
        </label>

        <label for="">
            <input type="checkbox" name="groups[]" value="admin"
                    <?= $user->inGroup('admin') ? 'checked' : '' ?>
            />Admin
        </label>

         <button>Save</button>
    </form>

    <form action="<?= route_to('user_ban', $user->id) ?>" method="post">
        <button type="submit"><?= $user->isBanned() ? 'Unban' : 'Ban' ?></button>
    </form>


<?= $this->endSection() ?>