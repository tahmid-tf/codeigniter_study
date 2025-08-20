<?= $this->extend('layouts/default.php') ?>
<?= $this->section('title') ?>Delete Article <?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Delete Article</h1>
<p>Are you sure?</p>

    <form action='<?= route_to('Articles/deleteData', $article->id) ?>' method='post' name='delete'>
        <button>Yes</button>
    </form>

<?= $this->endSection() ?>