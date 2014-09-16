<?
	$one = 0;
	$arrayCount = count($posts);
?>

<div class="row">
	<aside class="large-3 columns">
		<h5>Categories</h5>
		<ul class="side-nav">
			<li><a href="#">Site News</a></li>
			<li><a href="#">Featured Artist</a></li>
			<li><a href="#">Art Exhibits</a></li>
			<li><a href="#">Random Stuff</a></li>
		</ul>
	</aside>
	<div class="large-9 columns" role="content">
	<?php foreach ($posts as $post) : ?>
	<?php if ($post->published == 1) :?>
		<? $limit_post = Str::truncate($post->body, 310); ?>			
		<article>
			<h3><?= Html::anchor($post->url(), $post->title)?></h3>
			<h6 class="subheader small">Written by <?= $post->author->username;?> on <?= $post->format_time($post->created_at);?> </h6>
			<br><br>
			<div class="row show-for-small-only">
				<div class="large-6 columns">
					<?if( $post->post_img) : ?>
						<?= Asset::img('blog_imgs/' . $post->post_img); ?>
					<? endif ; ?>
					<br><br><br>

				</div>
			</div>
			<div class="row show-for-medium-only">
				<div class="large-6 columns">
					<?if( $post->post_img) : ?>
						<?= Asset::img('blog_imgs/' . $post->post_img); ?>
					<? endif ; ?>
					<br><br><br>
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<p><?= nl2br($limit_post) ?></p><br>
					<?= Html::anchor($post->url(), 'Read more', array('class' => 'button pull-right small show-for-medium-up')) ?> 
					<?= Html::anchor($post->url(), 'Read more', array('class' => 'button small show-for-small-only expand')) ?> 
				</div>
				<div class="large-6 columns show-for-large-up">
					<?if( $post->post_img) : ?>
						<?= Asset::img('blog_imgs/' . $post->post_img); ?>
					<? endif ; ?>
				</div>
			</div>
		</article>
		<?
		if(count($posts) % 1 == count($post) - 1 || count($posts) % 2 == count($post) - 1 ){
			$one += 1;
			if($one < $arrayCount){
				echo '<hr>';
			}
		}
		?>
	<?php endif ;?>
	<?php endforeach; ?>
	</div>
 </div>