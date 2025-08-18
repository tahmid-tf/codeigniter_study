<?= $this->extend("header") ?> ?>

<?= $this->section("title") ?>Articles<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Articles</h1>

<a href="<?= url_to('Articles::new') ?>">New</a>

<?php foreach ($articles as $article): ?>
    <article>
        <h2>
            <a href="<?= site_url('articles/' . $article['id']) ?>">
                <?= esc($article['title']) ?>
            </a>
        </h2>
        <p>
            <?= $article['content'] ?>
        </p>
        <a href="<?= url_to('Articles::edit', $article['id']) ?>">Edit Article</a>
    </article>
<?php endforeach ?>

<?= $this->endSection() ?>

