

<?php

/* When on a "Page" this template will be used insted of the index.php, since it is now defined.*/

get_header();

    if( have_posts() ) : ?>

      <?php
          // Here starts the loop
          while (have_posts()): the_post(); ?>
            <h1>I am a Page page: <?php the_title(); ?></h1>
            <?php the_content(); ?>
          <?php endwhile;
      ?>
    <?php else : ?>
      <p>i don't have posts</p>
    <?php endif;

get_footer();

?>
