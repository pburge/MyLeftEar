<!-- <h1>artist index</h1> -->

<div class='row'>
	<div class='large-12 columns'>
	<br>	
		<div class="row">
		<?php foreach ($artists as $artist) : ?>
				<div class="large-3 small-6 columns">
					<?= Html::img('http://placehold.it/470x300');?>
					<h6 class="panel"><?= Html::anchor($artist->url(),$artist->user->username)?></h6>
				</div>

		<?php endforeach ; ?>
		</div>
	</div>
</div>