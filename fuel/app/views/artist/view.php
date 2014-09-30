<!-- <h1>artist/view.php</h1> -->

<div class="row">
	<div class="large-12 columns">
		<div class="row">
			<div class="small-12 columns show-for-small-only">
				<img src="http://placehold.it/970x500&text=Image"><br>
			</div>
			<div class="small-12 columns show-for-medium-only">
				<img src="http://placehold.it/970x400&text=Image"><br>
			</div>
			<div class="large-8 columns show-for-large-up">
				<!-- <img src="http://placehold.it/700x500&text=Image"> -->
				<?php echo Html::img('assets/img/pieces/'.$piece->image); ?>
			</div>
			<div class="large-4 columns">
				<div class="show-for-small-only">
					<br>
				</div>
				<div class="show-for-medium-only">
					<br>
				</div>
				<div class="panel">
					<h3 class=""><?= $piece->name ?><hr/></h3>
					<!-- <h2 class="">Aquagalactic Subplanetary<hr/></h2> -->
					<!-- <h3 class="">I am Johnny Cash<hr/></h3> -->
					<h5 class="subheader">Info about the piece here.</h5>
					<ul>
						<li>Place holder stuff.</li>
						<li>Place holder stuff.</li>
						<li>Place holder stuff.</li>
						<li>Place holder stuff.</li>
						<li>Place holder stuff.</li>
						<li>Place holder stuff.</li>
					</ul>
					<h6 class="subheader">Price or something</h6>
					<h6 class="">$<?= $piece->price ?> USD</h6>
					<br><br>
					<a href="#" class="small button large-12">Add to cart</a>
				</div>
<!-- 				<div class="row">
					<div class="large-12 columns">
						<div class="panel">
							<h6 class="subheader">Price or something</h6>
							<h6 class="subheader large-push-10"><?= $piece->price ?></h6>

							<a href="#" class="small button">Buy now!</a>
						</div>
					</div>
				</div> -->
			</div>
		</div>
		<hr>

		<div class="row">
			<div class="large-12 columns">
				<h3>More from this artist:</h3>
			</div>
			<div class="large-3 small-6 columns">
				<a href="" title=""><img src="http://placehold.it/500x500&text=Thumbnail"></a>
				<div class="panel">
					<p>Description</p>
				</div>
			</div>
			<div class="large-3 small-6 columns">
				<a href="" title=""><img src="http://placehold.it/500x500&text=Thumbnail"></a>
				<div class="panel">
					<p>Description</p>
				</div>
			</div>
			<div class="large-3 small-6 columns">
				<a href="" title=""><img src="http://placehold.it/500x500&text=Thumbnail"></a>
				<div class="panel">
					<p>Description</p>
				</div>
			</div>
			<div class="large-3 small-6 columns">
				<a href="" title=""><img src="http://placehold.it/500x500&text=Thumbnail"></a>
				<div class="panel">
					<p>Description</p>
				</div>
			</div>
		</div>

	</div>

</div>
<!-- <pre><?= var_export($piece); ?></pre> -->
