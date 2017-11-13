<div class="description">
	<h2>Realisations</h2>
	<p class="realisations_description">
		Voici mes réalisations
	</p>
</div>

<div class="realisations">
	<?php 
	// Présentation de ttes les réalisations.
	foreach ($data as $element) 
	{
		$element_desc = '';
		$element_short_desc = nl2br(substr(($element['r_description']), 0, 50));
		$element_desc .= 
		'
			<a href="?c=realisations&a=showRealisation&r_id='.$element['r_id'].'">
			<div class="card_container" style="background-image: url('.$element['r_image_descr_path'].');">
			<div class="card_title">'. $element['r_titre'].'</div>
			<div class="card_description">'. $element_short_desc.'</div>
			</div></a>
		';
		echo $element_desc;
	}
	?>
</div>