<label for="title">Title</label>
<input type="text" id="title" name="title" value="<?= $article->title ?>">
<?php if (session('errors')): ?>
    <?= session('errors')['title'] ?>
    <br>
<?php endif; ?>

<label for="content">Content</label>
<?php if (session('errors')): ?>
    <?= session('errors')['content'] ?>
    <br>
<?php endif; ?>

<textarea name="content" id="content" cols="30" rows="10"><?= $article->content ?></textarea>