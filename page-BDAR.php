<?php
//  Template Name: BDAR
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
      <head>
           <meta charset="<?php bloginfo('charset'); ?>">
           <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
           <title><?php wp_title(); ?></title>
      
           <?php wp_head(); ?>
      </head>

    <body>



          <!--  -->
         
    <section class="container-menu">
        <div class="bdar-title">
            <h1>
                <?php the_field('BDAR_title'); ?>
            </h1>
        </div>

            <div class="bdar">            
             <div><?php the_field('BDAR_description'); ?></div> 
          </div>
    </section>
        


          

          <!-- <h1>esam page.php</h1> -->

<?php get_footer(); //prijungia footer.php ?>