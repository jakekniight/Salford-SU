<?php get_header(); ?>

       <?php

       /* DISPLAYING RECENT POSTS */
       if(have_posts() ):
             while( have_posts() ): the_post(); ?>
               <h3><?php the_title(); ?></h3>
              <p> help and information </p>
                 <p><?php the_content(); ?></p>
                 <hr>
             <?php endwhile;
      endif;

        ?>

<?php get_footer(); ?>
