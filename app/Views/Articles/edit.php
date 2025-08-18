<?= $this->extend('layouts/default.php') ?>
<?= $this->section('content') ?>

    <h1>Edit Article</h1>

    <form action="<?= base_url('articles/update/' . $article['id']) ?>" enctype="multipart/form-data" method="post">

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="<?= $article['title'] ?>">

<!--        --><?php //if (session('errors')): ?>
<!--            --><?php //= session('errors')['title'] ?>
<!--            <br>-->
<!--        --><?php //endif; ?>

        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"><?= $article['content'] ?></textarea>

<!--        --><?php //if (session('errors')): ?>
<!--            --><?php //= session('errors')['content'] ?>
<!--            <br>-->
<!--        --><?php //endif; ?>

        <button>Update</button>
    </form>

<?= $this->endSection() ?>