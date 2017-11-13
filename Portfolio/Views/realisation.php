<section class="realisation">
	<h2><?=$data[0]['r_titre'] ?></h2>
	<p class="description_realisation">
		<b>Description :</b> <?= nl2br($data[0]['r_description']) ?>
	</p>

	<?php 
	// Presentation individuelle de la réalisation choisie en montrant des images descriptitves.
	echo '<div class="cards_container_realisation">';

	foreach ($data as $element) 
	{
	echo '
		<div class="card_container_realisation" style="background-image:url('.$element['i_path'].')">
		</div>';
	}
	echo '</div>';

	?>
</section>
