<?= $this->extend('layouts/default.php') ?>

<?= $this->section('title') ?>Article<?= $this->endSection() ?>

<?= $this->section('content') ?>


<a href="<?= base_url('/articles/edit/'.$article['id']) ?>"><h1><?= esc($article['title']) ?></h1></a>
<p><?= esc($article['content']) ?></p>
<?= $this->endSection() ?>
