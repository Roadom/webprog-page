<link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
<style>
    .topnav {
        visibility: hidden;
    }
    * {
        background-color: #1f1f1f;
    }
    a:link {
        color: #007acc; /* Dark blue */
    }
    a:visited {
        color: #9b8aff; /* Soft purple */
    }
</style>
<title>News Archive</title>
<h2><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="./news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>