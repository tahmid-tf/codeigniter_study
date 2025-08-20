<?= $this->extend('layouts/default.php') ?>
<?= $this->section('content') ?>

<h1>New Article</h1>

<form action="<?= base_url('articles/create') ?>" enctype="multipart/form-data" method="post">

    <?php include_once __DIR__ . '/form.php'; ?>

    <button>Save</button>
</form>


<?= $this->endSection() ?>
