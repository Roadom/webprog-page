<link href="<?= base_url('CSS/comments.css') ?>" rel="stylesheet">
<link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
<script>0</script>

<style>
    .topnav {
        visibility: hidden;
    }
    * {
        background-color: #1f1f1f;
        margin:20px;
    }
    a {
        color:gray;
    }
</style>
<h2><?= esc($comments['alias']) ?></h2>
<p><?= esc($comments['body']) ?></p>

<a href="<?= base_url('comments') ?>" class="button">Back to Comments Page</a>