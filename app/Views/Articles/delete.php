<?= $this->extend('layouts/default.php') ?>
<?= $this->section('title') ?>Delete Article <?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Delete Article</h1>
<p>Are you sure?</p>

    <form action="<?= route_to('article_delete_data', $article->id) ?>" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Yes</button>
    </form>


<?= $this->endSection() ?>