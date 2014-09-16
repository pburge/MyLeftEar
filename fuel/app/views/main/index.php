<?
	//MAIN CONTENT
?>

	<div class="row show-for-medium-up">
		<div class="medium-12 columns">
			<div class="carousel" style="margin-bottom: 0px;">
				<div class='about-section'><a href="artist/supertest/img1"><?= Asset::img('arts/91Eu7Lv.png'); ?></a></div>
				<div class='about-section'><a href="artist/supertest/img2"><?= Asset::img('arts/jps0Zc1.jpg'); ?></a></div>
				<div class='about-section'><a href="artist/supertest/img3"><?= Asset::img('arts/gvQWR0B.png'); ?></a></div>
			</div>
		</div>
	</div>

	<div class="row show-for-small-only">
		<div class="medium-1 columns"> <p></p></div>
		<div class="medium-10 columns">
			<div><a href="?url=highlight_piece1"><?= Asset::img('arts/m_91Eu7Lv.png'); ?></a><h6 class="panel">Description</h6></div>
			<div><a href="?url=highlight_piece2"><?= Asset::img('arts/m_jps0Zc1.jpg'); ?></a><h6 class="panel">Description</h6></div>
			<div><a href="?url=highlight_piece3"><?= Asset::img('arts/m_gvQWR0B.png'); ?></a><h6 class="panel">Description</h6></div>
		</div>
		<div class="medium-1 columns"><p></p></div>
	</div>

	<div class="row">
		<div class="large-12 columns">
			<hr class='show-for-medium-up'>
			<div class="text-center">
				<!-- <h3>Newest Artwork:</h3> -->
			</div>
			<div class="row">
				<div class="large-3 small-6 columns">
					<a href="product/photography">
						<?= Asset::img('arts/cjvQ1Pm.jpg'); ?>
						<h6 class="panel text-center inverse">Photography</h6>
					</a>
				</div>
				<div class="large-3 small-6 columns">
					<a href="product/paintings">
						<?= Asset::img('arts/xFK5DZs.jpg'); ?>
						<h6 class="panel text-center inverse">Paintings</h6>
					</a>
				</div>
				<div class="large-3 small-6 columns">
					<a href="product/prints" title="">
						<?= Asset::img('arts/wx4tFV9.jpg'); ?>
						<h6 class="panel text-center inverse">Prints</h6>
					</a>
				</div>
				<div class="large-3 small-6 columns">
					<a href="product/digital" title="">
						<?= Asset::img('arts/EAwnZ9x.jpg'); ?>
						<h6 class="panel text-center inverse">Digital Art</h6>
					</a>
				</div> 
			</div>
		</div>
	</div>