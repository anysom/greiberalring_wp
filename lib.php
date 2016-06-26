<?php
function getGalleries() {
    $args = [
      'posts_per_page' => -1,
      'post_type' => 'galleries',
      'order' => ASC,
      'orderby' => 'name'
    ];
    $query = new WP_Query( $args );
    if( $query->have_posts() ) :
      $posts = [];
      while( $query->have_posts() ) : $query->the_post();
        $post = new StdClass;
        $post->id = $query->post->ID;
        $post->slug = $query->post->post_name;
        $post->title = $query->post->post_title;
        $post->cover = get_field('cover', $query->post->ID);
        $post->images = get_field('images', $query->post->ID);
        $post->thumbnail_id = get_post_thumbnail_id( $query->post->ID );
        $posts[] = $post;
      endwhile;
    endif;
    wp_reset_postdata();
    return $posts;
  }
  ?>
