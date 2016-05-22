

<?php

/* When on a "Page" with the specific name 'My stuff", this template will be used.*/

get_header();

    if( have_posts() ) : ?>

      <?php
          // Here starts the loop
          while (have_posts()): the_post(); ?>
            <h1>I am a Page page: <?php the_title(); ?></h1>
            <h2>This subheader is specific only to the My-stuff page, since it has its own template</h2>
            <?php the_content(); ?>
          <?php endwhile;
      ?>
    <?php else : ?>
      <p>i don't have posts</p>
    <?php endif;

get_footer();

?>
