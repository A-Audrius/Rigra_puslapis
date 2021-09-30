
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
      <head>
           <meta charset="<?php bloginfo('charset'); ?>">
           <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
           <title><?php wp_title(); ?></title>
      
           <?php wp_head(); ?>
      </head>

    <body>

     <?php $image = get_field('hp_background'); ?> 
 <section class="header-container"  style="background-image: url(<?php echo $image['sizes']['large'] ?>);"> 
        
    <div class="overlay"> 
       <header>
                 <!-- LOGO -->
                 <div class="logo"> 
                      <a href="<?php bloginfo('url') ?>">
                      <?php $image = wp_get_attachment_image_src(get_field('logo_type'), 'logo'); ?>
                      <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('logo_type')) ?>" />
                   </div>

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
                                   
                 <!-- <!- BEGANTI EILUTE -->
            <div class="running-line"> <?php the_field('hp_beganti_eilute'); ?> </div>
    </div> 
 </section>     
            <!-- RODYKLE I VIRŠŲ -->
          <button id="topBtn"><i class="fas fa-arrow-up"></i>
          </button>         