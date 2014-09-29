<?
	$pieces = $artist->get_recent_pieces();
	$arrayCount = count($pieces);

	$art_piece;
?>
<div class="row">
	<div class="large-12 columns">
		<div class="row">
			<div class="large-4 small-12 columns show-for-small-only">
				<!-- <img src="http://placehold.it/970x300&amp;text=Avatar"> -->
				<?= Html::img('assets/img/profile/' . $artist->photo) ?>
				<div class="panel inverse">
					<h3><?= $artist->user->username ?></h3>
					<h6 class="subheader"></h6>
				</div>
			</div> 

			<div class="small-12 columns show-for-medium-only">
				<!-- <img src="http://placehold.it/970x300&amp;text=Avatar"> -->
				<?= Html::img('assets/img/profile/' . $artist->photo) ?>
				<div class="panel inverse">
					<h3><?= $artist->user->username ?></h3>
					<h6 class="subheader"></h6>
				</div>
			</div> 

			<div class="large-4 small-12 columns show-for-large-up">
				<!-- <img src="http://placehold.it/970x300&amp;text=Avatar"> -->
				<?= Html::img('assets/img/profile/' . $artist->photo) ?>
				<div class="panel inverse">
					<h2><?= $artist->user->username ?></h2>
					<h6 class="subheader"></h6>
				</div>
			</div>

			<div class="large-8 columns">
				<?php if(empty($pieces)) : ?>
					<?php echo "this artist hasn't uploaded any pieces of art yet." ?>
				<?php else :?>
					<?php foreach($pieces as $piece) : ?>
						<?php
							$art_piece = Html::anchor($piece->url(),Html::img('http://lorempixel.com/500/500/cats'));
							$doc = new DOMDocument();
							$doc->loadXML("<row />");
							$f = $doc->createDocumentFragment();
							$f->appendXML("<div class=\"large-4 small-6 columns\">".
											// Html::anchor($piece->url(),Html::img('http://lorempixel.com/500/500/cats')).
											$art_piece.
											"<div class=\"panel\">
												<h5>". $piece->name ."</h5>
												<h6 class=\"subheader\">$". $piece->price ."</h6>
											</div>
										</div>");

							if ($pieces == $arrayCount - 1) 
							{
								for ($c = 0; $c < $numCols - 1 - $artists % $numCols; $c++) {
									$f->appendXML("<div class='large-4 small-6 columns'></div>");
									$doc->documentElement->appendChild($f);
							  	}
							}
							$doc->documentElement->appendChild($f);
							echo $doc->saveXML(); 
							


							?>


					<?php endforeach ; ?>
				<?php endif ;?>
			</div>
		</div> 
	</div>
</div>

