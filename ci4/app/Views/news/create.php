    
    <div class="index_tab">
        <div class="index_button">
            <a href=<?= base_url('first_page') ?>><b>Home_Screen</b></a>
        </div>
        <div class="index_button">
            <a href=<?= base_url('resources') ?>><b>Resources</b></a>
        </div>
        <div class="index_button">
            <a href=<?= base_url('news') ?>><b>News</b></a>
        </div>

    </div>
<br>

<?= link_tag('styles.css') ?>
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<article>
<form action="../news" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br><br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br><br>

    <input type="submit" name="submit" value="Create news item">
</form>

</article>