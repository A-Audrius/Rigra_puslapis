<?php
//  Template Name:  Naujienos ir paslaugos
 ?>
<?php get_header(); //prijungia header.php?>


<section class="container-menu"> 
    <div class="tab">  
      

        <button class="btn" onclick="openPage(event, 'Naujienos')" id="defaultOpen">
            <?php the_field('1puslapis_2title'); ?></button>

       <button class="btn" id="btn-color1" onclick="openPage(event, 'Paslaugos')">
            <?php the_field('1puslapis_1title'); ?></button>

    </div>

        
        <div id="Naujienos" class="content">
            <div class="posts-block">  
     
                        <?php
                    $args = [
                        //uzklausos parametrai, masyvo formatu
                       'cat' => get_field('1puslapis_category'),
                        'posts_per_page' => get_field('1puslapis_limit')
                    ];
                    $result = new WP_Query($args);
                    //dump($result);               
                    if($result->have_posts()):
                        while($result->have_posts()):
                            $result->the_post(); 
                        ?>                           
                            <article class="post">                           
                                <a href="<?php the_permalink(); ?>"> 
                                    <img class="post-image" 
                                    src="<?php the_post_thumbnail_url('post-block-image'); ?>" alt="">
                                </a> 
                                    <h3>
                                        <a href="<?php the_permalink(); ?>"> 
                                        <?php the_title(); ?></a>                          
                                    </h3>
                                    <div class="read-more">
                                        <?php the_excerpt(); ?>                          
                                    </div>
                            </article>
                            
                            <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                            ?>
            </div>

                        <?php
                    $args = [
                        'cat' => get_field('1puslapis_category'),
                        'posts_per_page' => get_field('1puslapis_limit')
                    ];
        
                    $result = new WP_Query($args);               
                    if($result->have_posts()):
                        while($result->have_posts()):
                            $result->the_post();
                        ?>                           
                            
                                <div class="work-cat">
                                <?php echo get_the_category_list(', ') ?>
                                    </div>
                            <?php
                        endwhile;
                    endif;
                    wp_reset_postdata(); 
                            ?>
        </div>  




            <div id="Paslaugos" class="content">
            <div><?php the_field('1puslapis_1description'); ?></div> 
        </div> 
           
</section>




