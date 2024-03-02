<body>
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
<h2><?= esc($title) ?></h2>

<div class="article">
    <?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p> <br>

    <?php endforeach ?>

    <?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

    <?php endif ?>
</div>
