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
			<article>
				<h3><?= Html::anchor($post->url(), $post->title)?></h3>
				<h6 class="subheader small">Written by <?= $post->author->username;?> on <?= $post->created_at;?> </h6>
				<br><br>
				<div class="row show-for-small-only">
					<div class="large-6 columns">
						<?= Asset::img('arts/' . $post->post_img); ?>
						<br><br><br>
					</div>
				</div>
				<div class="row show-for-medium-only">
					<div class="large-6 columns">
						<?= Asset::img('arts/' . $post->post_img); ?>
						<br><br><br>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<p> <?= $post->body;?> </p>
					</div>
					<div class="row show-for-large-up">
						<div class="large-6 columns">
							<?= Asset::img('arts/' . $post->post_img); ?>
						</div>

					</div>
				</div>
			</article>
			<hr/>
		<?php endforeach; ?>
	</div>
 </div>