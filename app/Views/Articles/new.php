<?= $this->extend('layouts/default.php') ?>
<?= $this->section('content') ?>

<h1>New Article</h1>

<form action="<?= base_url('articles/create') ?>" enctype="multipart/form-data" method="post">

    <label for="title">Title</label>
    <input type="text" id="title" name="title" value="<?= old('title') ?>">
    <?php if (session('errors')): ?>
        <?= session('errors')['title'] ?>
        <br>
    <?php endif; ?>

    <label for="content">Content</label>
    <textarea name="content" id="content" cols="30" rows="10"><?= old('content') ?></textarea>
    <?php if (session('errors')): ?>
        <?= session('errors')['content'] ?>
        <br>
    <?php endif; ?>

    <button>Save</button>
</form>


<?= $this->endSection() ?>
