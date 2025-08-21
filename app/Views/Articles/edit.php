<?= $this->extend('layouts/default.php') ?>
<?= $this->section('content') ?>

    <h1>Edit Article</h1>

    <form action="<?= url_to('Articles::update' , $article->id) ?>" enctype="multipart/form-data" method="post">

        <input type="hidden" name="_method" value="PATCH">

        <?php include_once __DIR__ . '/form.php'; ?>

        <button>Update</button>
    </form>

<?= $this->endSection() ?>