<section class="accueil">
	<div class="descritpion">
		<h2>Accueil</h2>
		<p class="description">
			<?= $data['text']['a_presentation'] ?>
		</p>
	</div>

	<div class="realisations_accueil">
		<?php 
		foreach ($data['real'] as $element) 
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
</section>
