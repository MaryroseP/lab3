<body>
<div class="index_tab">
        <div class="index_button">
            <a href=<?= base_url('first_page') ?>><b>Home_Screen</b></a>
        </div>
        <div class="index_button">
            <a href=<?= base_url('resources') ?>><b>Resources</b></a>
        </div>
        <div class="index_button">
            <a href=<?= base_url('guests/new') ?>><b>Add new</b></a>
        </div>

    </div>
<br>

<br>
<h1>>>> What people have to say:</h1>
<br>

<article>
<?php if (! empty($guests) && is_array($guests)): ?>

    <?php foreach ($guests as $guest): ?>
        <div class="new">
        <h3><?= esc($guest['name']) ?></h3>

        <div class="main">
            <?= esc($guest['email']) ?>
	    <br>
            <?= esc($guest['website']) ?>
            <br>
            <?= esc($guest['comment']) ?>
	    <br>
            <?= esc($guest['gender']) ?>
	    <br>
        </div>
        <p><a href="./guests/<?= esc($guest['email'], 'url') ?>">View Guest</a></p>
    </div><br>
    <?php endforeach ?>
<?php else: ?>

    <h3>No Guests</h3>

    <p>Unable to find any guests for you.</p>

<?php endif ?>
</article>
</body>