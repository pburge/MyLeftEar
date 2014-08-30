<?

?>

<!-- <h1>artist/index.php</h1> -->
<div class="row">
	<div class="large-12 columns">
	 
		<div class="row">
		 
			<div class="large-4 small-12 columns show-for-small-only">
				<img src="http://placehold.it/970x300&amp;text=Avatar">
				<div class="panel">
					<h3><?= $artist->user->username ?></h3>
				</div>
			</div> 

			<div class="small-12 columns show-for-medium-only">
				<img src="http://placehold.it/970x300&amp;text=Avatar">
				<div class="panel">
					<h3><?= $artist->user->username ?></h3>
					<h6 class="subheader">stuff jidowajdiow;jdioaw;jda</h6>
				</div>
			</div> 

			<div class="large-4 small-12 columns show-for-large-up">
				<img src="http://placehold.it/470x440&amp;text=Avatar">
				<div class="panel">
					<h2><?= $artist->user->username ?></h2>
					<h6 class="subheader">stuff about artist here</h6>
				</div>
			</div>

			<div class="large-8 columns">


				<div class="row">
					<!-- <div class="large-4 small-6 columns"> -->



						<?php foreach($artist->get_recent_pieces() as $piece) : ?>


							<div class="large-4 small-6 columns">
								<?= Html::anchor($piece->url(),Html::img('http://lorempixel.com/500/500/cats/Thumbnail'))?>
								<!-- http://lorempixel.com/500/500/cats -->
								<div class="panel">
									<h5>Item Name</h5>
									<h6 class="subheader">$000.00</h6>
								</div>
							</div>



						<?php endforeach; ?>





					<!-- </div> -->

				</div> 


			</div>
		</div> 
	</div>
</div>
