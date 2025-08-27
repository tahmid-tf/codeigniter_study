<?= $this->extend('layouts/default.php') ?>
<?= $this->section('content') ?>

    <h1>Set Password</h1>

    <form action="<?= site_url('set-password') ?>" enctype="multipart/form-data" method="post">

        <?= csrf_field() ?>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password">

        <label for="password">Password Confirmation</label>
        <input type="password" id="password" name="password_confirmation" placeholder="Confirm Password">

        <button>Submit</button>
    </form>

<?= $this->endSection() ?>