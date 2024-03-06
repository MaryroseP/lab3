<div class="index_tab">
        <div class="index_button">
            <a href=<?= base_url('first_page') ?>><b>Home_Screen</b></a>
        </div>
        <div class="index_button">
            <a href=<?= base_url('resources') ?>><b>Resources</b></a>
        </div>
        <div class="index_button">
            <a href=<?= base_url('guests') ?>><b>Guest</b></a>
        </div>

    </div>
<br>


<?= link_tag('styles.css') ?>
<body>
<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
<article class="center">
	<?= session()->getFlashdata('error') ?>
	<?= validation_list_errors() ?>

	<form action="../guests" method="post">
	    <?= csrf_field() ?>
            <h2>Anything to say?</h2>
            Name: <input type="text" name="name" value="<?= set_value('name') ?>">
            <br><br>
            E-mail: <input type="text" name="email" value="<?= set_value('email') ?>">
            <br><br>
            Website: <input type="text" name="website" value="<?= set_value('website') ?>">
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"><?= set_value('comment') ?></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
            <br><br>

	    <input type="submit" name="submit" value="Create guest item">
	</form>
</article>