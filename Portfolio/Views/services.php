<section class="services">
	<h2>Services</h2>
	<img src="assets/img/Services/description.jpg" alt="">

	<div class="services_containers">
		<?php 
		//Présentation de mes services en tant que full-stack web dev.
		foreach ($data as $element) 
		{
			$service  = '<div class="service">';
			$service .= '<h2>'. $element['s_service'] .'</h2>';
			$service .= '<b>Description </b>: '. $element['s_description'].'<br>';
			$service .= '<div class="img_container"><img class="img_service" src="'.$element['s_image_descr_path'].'" alt=""></div >';
			$service .= '</div>';

			echo $service;
		}
		?>
	</div>
</section>
