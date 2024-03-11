<link href="<?= base_url('CSS/comments.css') ?>" rel="stylesheet">
<link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
<script>0</script>

<style> 
    body {
        background-color: #1f1f1f;
    }
    .topnav {
        visibility: hidden;
    }
</style>
<title><?= esc($title) ?></title>
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action=" <?php echo site_url('comments'); ?> " method="post">
    <?= csrf_field() ?>

    <label for="alias">Name</label>
    <input type="input" name="alias" value="<?= set_value('alias') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Post Comment">
</form>
<form action="<?= base_url('comments') ?>" method="get">
    <button type="submit" name="submit" style="cursor: pointer;">Back to Comments Page</button>
</form>