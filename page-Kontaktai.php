<?php
//  Template Name: Kontaktai
 ?>

<?php get_header(); ?>



   <!--  sekcija KONTAKTAI -->
      <section class="overlay-contact">
        <section class="hero-contact">

              <div>
                <h2 id="kontaktai"><?php the_field('5puslapis_headline'); ?></h2>
              </div>

                <div class="contact">
                  <div class="contact-description"><?php the_field('5puslapis_description'); ?>
                  </div>
                </div>                         
          </section>
      </section>

   
           
      <?php wp_footer(); ?>  