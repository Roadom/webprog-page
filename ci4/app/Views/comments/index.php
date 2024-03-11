<link href="<?= base_url('CSS/comments.css') ?>" rel="stylesheet">
<link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
<script>0</script>

<title><?= esc($title) ?></title>
<h2 style="margin-left: 20px;"><?= esc($title) ?></h2>

<div class="comment-container">
    <?php if (! empty($comments) && is_array($comments)): ?>
        <?php foreach ($comments as $comments_item): ?>
            <div class="comment-box">
                <h3><?= esc($comments_item['alias']) ?></h3>
                <div class="main" style="margin-left:50px;">
                    <?= esc($comments_item['body']) ?>
                </div>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <h3>No Comments RIP...</h3>
        <p>Unable to find any comments for you.</p>
    <?php endif ?>
</div>

<div class="buttons">
<form action="<?= base_url('comments/new') ?>" method="get">
    <button type="submit"style="cursor: pointer;">Post a Comment</button>
</form>

<form action="<?= base_url('me') ?>" method="get">
    <button type="submit" style="cursor: pointer;">Back to About Me</button>
</form>
</div>