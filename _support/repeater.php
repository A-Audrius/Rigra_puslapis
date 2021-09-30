<?php
if(have_rows('repeater_lauko_pavadinimas')):
	while(have_rows('repeater_lauko_pavadinimas')):
		the_row();
		//get_sub_field('lauko_pavadinimas'); //grazina
		//the_sub_field('lauko_pavadinimas'); //spausdina
		?>
		<!-- KARTOJAMAS HTML KODAS -->
		<?php
	endwhile;
endif;
?>




<?php

$args = [
	//uzklausos parametrai, masyvo formatu
];

//Issiunciame uzklausa i duomenu baze
//ir issaugome atsakyma i kintamaji $result
$result = new WP_Query($args);

//Ciklas isvedimui
if($result->have_posts()):
	while($result->have_posts()):
		$result->the_post(); //apdorojame viena irasa, paruosiame isvedimui
		?>
		<!-- HTML BLOKAS -->
		<?php
	endwhile;
endif;
wp_reset_postdata(); //Atstatome pradine puslapio uzklausa
?>
