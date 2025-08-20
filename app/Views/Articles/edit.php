<?= $this->extend('layouts/default.php') ?>
<?= $this->section('content') ?>

    <h1>Edit Article</h1>

    <form action="<?= base_url('articles/update/' . $article->id) ?>" enctype="multipart/form-data" method="post">

        <?php include_once __DIR__ . '/form.php'; ?>

        <button>Update</button>
    </form>

<?= $this->endSection() ?>