<?= $this->extend('layouts/default.php') ?>

<?= $this->section('title') ?>Article<?= $this->endSection() ?>

<?= $this->section('content') ?>


<a href="<?= url_to('Articles::edit', $article->id) ?>"><h1><?= esc($article->title) ?></h1></a>

<a href="<?= url_to('Articles::confirmDelete', $article->id) ?>">Delete</a>
<p><?= esc($article->content) ?></p>
<?= $this->endSection() ?>
