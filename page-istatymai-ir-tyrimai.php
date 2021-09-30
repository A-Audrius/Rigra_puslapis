 <?php
//  Template Name: projektai ir ataskaitos
 ?>

<?php get_header(); ?>

          
   <!-- sekcija ĮSTATYMAI IR TYRIMAI         -->

   <section class="container-menu"> 

        <div class="tab">  
            <button class="btn2" onclick="openPage2(event, 'Istatymai')" id="defaultOpen_Istatymai">
                <?php the_field('3puslapis_headline'); ?></button>  

            <button class="btn2" onclick="openPage2(event, 'tyrimai')">
                <?php the_field('3puslapis_2headline'); ?></button>
        </div>
            
                <div id="Istatymai" class="content2">
                    <div><?php the_field('3puslapis_description'); ?></div> 
                </div>
            
            <div id="tyrimai" class="content2">
            <div><?php the_field('3puslapis_2description'); ?></div> 
            </div>
</section> 

<!--  -->



<?php wp_footer(); ?>        

<script>
   window.onload = function () {
document.getElementById("defaultOpen_Istatymai").click();
} 

</script>

</body>
</html> 
