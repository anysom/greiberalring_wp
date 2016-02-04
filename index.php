<?php

get_header();

    if( have_posts() ) : ?>
      <p>i have posts</p>
      <?php
          // Here starts the loop
          while (have_posts()): the_post(); ?>
            <a href="<?php the_permalink(); ?>">i am a post: <?php the_title(); ?></a>
            <?php the_content(); ?>
          <?php endwhile;
      ?>
    <?php else : ?>
      <p>i don't have posts</p>
    <?php endif;

get_footer();

?>
