 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
      <head>
           <meta charset="<?php bloginfo('charset'); ?>">
           <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
           <title><?php wp_title(); ?></title>
      
           <?php wp_head(); ?>
      </head>

    <body>

    
 <section class="header-container-subpages" >       
       <header class="header-subpages">          

              <nav class="main-nav show">
                  <div class="toggle">
                  <a class="fa fa-bars" aria-hidden="true"></a>
                 </div>
              </nav>

                  <?php
                  $menu_options = [
                    'menu_class' => '""',
                    'container' => false,
                    'theme_location' => 'primary-navigation',
                    'walker' => new custom_navwalker()
                  ];
                  wp_nav_menu($menu_options);
                  ?>
               <div class="headline"> 
              <h1> <?php the_field('hp_headline'); ?> </h1>
          </div>    
       </header>
 </section>     
            <!-- RODYKLE I VIRŠŲ -->
          <button id="topBtn"><i class="fas fa-arrow-up"></i>
          </button>  

          <!--  -->

 


        <section class="container-menu"> 
          <div id="Naujienoss" class="tabcontent">

            <div class="post"> 
              <div class="post-image">
                <img src="<?php the_post_thumbnail_url('post-block-image'); ?>" alt="">
              </div>
                 <h3>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a>
                </h3>
                <div>
                <?php the_content('1puslapis_posts'); ?>
                
                </div>
            </div>

<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>

              <div class="category-paginate">
                  <?php echo paginate_links(); ?>
              </div>
            </div>
          </section>
  


<!-- <h1>esame single.php</h1> -->

<?php get_footer(); //prijungia footer.php ?>