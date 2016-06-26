<?php

function greiberAlring_resources() {
  wp_enqueue_style('style', get_template_directory_uri() . '/styles/main.min.css' );
  wp_enqueue_script( 'script-main', get_template_directory_uri() . '/scripts/main.min.dev.js', array(), '', true);
}


add_action('wp_enqueue_scripts', 'greiberAlring_resources');

// Register navigation menus
register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu')
));

//Require library of custom functions
require_once('lib.php');

// Get id of top most page ancestor
/*function get_top_ancestor_id() {

  global $post;

  //if the post has a parent, return that id
  if($post->post_parent) {
    $ancestors = array_reverse(get_post_ancestors($post->ID));

    return $ancestors[0];
  }

  //else return the id of the current page.
  return $post->ID;
}



// Does page have children
function has_children() {
  global $post;

  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);
}*/
?>
