<?= $this->extend('layouts/default.php') ?>
<?= $this->section('content') ?>

<h1>New Article</h1>

<form action="<?= base_url('articles') ?>" enctype="multipart/form-data" method="post">

    <?= csrf_field() ?>

    <?php include_once __DIR__ . '/form.php'; ?>

    <button>Save</button>
</form>


<?= $this->endSection() ?>
