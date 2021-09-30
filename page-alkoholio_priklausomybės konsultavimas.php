<?php
//  Template Name: konsultavimas_priklausomybės
 ?>

<?php get_header(); ?>



   <section class="container-menu"> 
    
            <div class="subpage-title">
                <h2><?php the_field('paslaugos_priklausomybes_title'); ?></h2>
            </div>

            <div class="tabcontent">
               <div><?php the_field('paslaugos_priklausomybes_description'); ?></div> 
            </div>
    </section> 

<!--  -->



<?php wp_footer(); ?>        


</body>
</html> 