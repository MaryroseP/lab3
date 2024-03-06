<!--<h2><?= esc($title) ?></h2>-->

<article>
<?php if (! empty($guests) && is_array($guests)): ?>

    <?php foreach ($guests as $guest): ?>

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

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guests</h3>

    <p>Unable to find any guests for you.</p>

<?php endif ?>
</article>