<link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
<style>
    .topnav {
        visibility: hidden;
    }
    * {
        background-color: #1f1f1f;
    }
</style>
<h2><?= esc($news['title']) ?></h2>
<p><?= esc($news['body']) ?></p>