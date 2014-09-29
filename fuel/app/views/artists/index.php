<?
	$one = 0;
	$arrayCount = count($artists);

	$output = "<div class=\"row\" >";
  	$numCols = 3;
  	$math = $numCols - 1 - $artists % $numCols;
?>
<div class='row'>
	<div class='large-12 columns'>
	<br>	
	<?php foreach ($artists as $artist) : ?>
	<!-- <? $pieces = Html::anchor($artist->url(),Html::img('http://placehold.it/500x500')); ?> -->
	<?php
		$doc = new DOMDocument();
		$doc->loadXML("<row />");
		$f = $doc->createDocumentFragment();
		$f->appendXML("<div class=\"large-4 small-6 columns\">".
						// Html::anchor($artist->url(),Html::img('http://placehold.it/500x500')).
						// $pieces .
						Html::anchor($artist->url(),Html::img('assets/img/profile/' . $artist->photo)).
						"<div class=\"panel inverse text-center\">
							<h5>". Html::anchor($artist->url(),$artist->user->username, array('class' => 'white-anchor'))."</h5>
						</div>
					</div>");

		if ($artists == $arrayCount - 1) 
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
	</div>
</div><br>
