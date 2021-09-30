<?php

//Ciklas isvedimui
if(have_posts()):
	while(have_posts()):
		the_post(); //apdorojame viena irasa, paruosiame isvedimui
		?>
		<!-- HTML BLOKAS -->
		<?php
	endwhile;
endif;

?>