<?php
//  Template Name: Nuotraukų galerija
 ?>
 
<!-- NUOTRAUKU GALERIJA -->

<div class="picture" style="display: flex;"> 

         <div class="columns">
      <?php $images = get_field('2puslapis_1images'); 
        echo '<img src="'.$images['sizes']['galery-image-large'].'" alt="'.$images['alt'].'">';?> 
    <?php $images = get_field('2_puslapis_2images'); 
        echo '<img src="'.$images['sizes']['galery-image-medium'].'" alt="'.$images['alt'].'">';?> 
          </div>

          <div class="columns">
          <?php $images = get_field('2puslapis_3images'); 
      echo '<img src="'.$images['sizes']['galery-image-medium'].'" alt="'.$images['alt'].'">';?> 
      <?php $images = get_field('2puslapis_4images'); 
        echo '<img src="'.$images['sizes']['galery-image-large'].'" alt="'.$images['alt'].'">';?>
          </div>

            <div class="columns">
                    <?php $images = get_field('2puslapis_5images'); 
      echo '<img src="'.$images['sizes']['galery-image-large'].'" alt="'.$images['alt'].'">';?> 
      <?php $images = get_field('2puslapis_6images'); 
        echo '<img src="'.$images['sizes']['galery-image-medium'].'" alt="'.$images['alt'].'">';?>
            </div>

            <div class="columns">
                      <?php $images = get_field('2puslapis_7images'); 
      echo '<img src="'.$images['sizes']['galery-image-medium'].'" alt="'.$images['alt'].'">';?> 
      <?php $images = get_field('2puslapis_8images'); 
        echo '<img src="'.$images['sizes']['galery-image-large'].'" alt="'.$images['alt'].'">';?>
           </div>

            <div class="columns">
                            <?php $images = get_field('2puslapis_9images'); 
      echo '<img src="'.$images['sizes']['galery-image-large'].'" alt="'.$images['alt'].'">';?> 
      <?php $images = get_field('2puslapis_10images'); 
        echo '<img src="'.$images['sizes']['galery-image-medium'].'" alt="'.$images['alt'].'">';?>   
            </div> 

           <div class="columns">
                          <?php $images = get_field('2puslapis_11images'); 
      echo '<img src="'.$images['sizes']['galery-image-medium'].'" alt="'.$images['alt'].'">';?> 
      <?php $images = get_field('2puslapis_12images'); 
        echo '<img src="'.$images['sizes']['galery-image-large'].'" alt="'.$images['alt'].'">';?>
           </div>
   
</div>



<!-- VEIKLA_SOC.PASLAUGOS -->


<section class="container-menu"> 
        <div class="tab">  
            <button class="btn1" onclick="openPage1(event, 'Apiemus')" id="defaultOpen_Apiemus">
                <?php the_field('2puslapis_1title'); ?></button>  

            <button class="btn1" id="btn-color2" onclick="openPage1(event, 'Parama')">
                <?php the_field('2puslapis_2title'); ?></button>
        </div>
            
            <div id="Apiemus" class="content1">
                <div><?php the_field('2puslapis_1description'); ?></div> 
              </div>
            
            <div id="Parama" class="content1">
                <div><?php the_field('2puslapis_2description'); ?></div>
          </div>
</section>


