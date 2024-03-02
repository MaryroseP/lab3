    
    <div class="index_tab">
        <div class="index_button">
            <a href=<?= base_url('first_page') ?>><b>Home_Screen</b></a>
        </div>
        <div class="index_button">
            <a href=<?= base_url('resources') ?>><b>Resources</b></a>
        </div>
        <div class="index_button">
            <a href=<?= base_url('news/new') ?>><b>Add new</b></a>
        </div>

    </div>
<br>

<br>



<h1 class="heading"><?= esc($title) ?></h2>

<?= link_tag('styles.css') ?>

    <?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>
        <div class="new">
        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
        </div><br>
    <?php endforeach ?>



    <?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

    <?php endif ?>

<!--
    1. Copy files made for news
    2. Rename all classes to guests instead of news
    3. Change fields from title and body to name, email, website etc.
    4. Check justin's repo
 -->
