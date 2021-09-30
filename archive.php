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
       </header>
                                  

 </section>     
            <!-- RODYKLE I VIRŠŲ -->
          <button id="topBtn"><i class="fas fa-arrow-up"></i>
          </button>    

          <!--  -->
        
<section class="container-menu"> 
     <h2 class="category-name">
        <?php single_cat_title(); ?>
    </h2>
         <div class="tabcontent">
        
            <div class="posts-block">    
                
              <?php

                //Ciklas isvedimui
                if(have_posts()):
                    while(have_posts()):
                        the_post(); 
                        ?> 

                        <div class="post"> 

                            <img src="<?php the_post_thumbnail_url('post-block-image'); ?>" alt="<?php the_title(); ?>">
                              <h4>
                                <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                                </a>
                              </h4>
                            <div>
                            <div class="read-more">
                                    <?php the_excerpt(); ?>                          
                                    </div>
                                       
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;

              ?>       
            </div>



        </div>
            <div class="category-paginate">
                <?php echo paginate_links(); ?>
            </div>
    </section>

<!-- <h1>esame archive.php</h1> -->

<?php get_footer(); //prijungia footer.php ?>