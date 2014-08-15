<?php foreach ($posts as $post) : ?>
	<h2><?= Html::anchor($post->url(), $post->title)?></h2>
<?php endforeach; ?>
