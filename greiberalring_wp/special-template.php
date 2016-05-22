

<?php

//The comment below with the template name is used to register this as a template in wordpress.

/*
Template Name: Special Layout
*/

/* When on a "Page" this template will be used insted of the index.php, since it is now defined.*/

get_header();

    if( have_posts() ) : ?>

      <?php
          // Here starts the loop
          while (have_posts()): the_post(); ?>

            <!--Render the menu will only links to subpages, only if the page is a subpage, or it has child pages.-->

            <?php
            if (has_children() OR $post->post_parent > 0) {
              $args = array(
                'child_of' => get_top_ancestor_id(),
                'title_li' => ''
              );
              wp_list_pages($args);
            }
            ?>

            <h1>I am a Page page: <?php the_title(); ?></h1>

            <h4>This is some text that is added because this page has set that it used the "special template". That can be set in the wordpress back office under the specific page.</h4>

            <?php the_content(); ?>
          <?php endwhile;
      ?>
    <?php else : ?>
      <p>i don't have posts</p>
    <?php endif;

get_footer();

?>
