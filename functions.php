<?php
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

add_filter( 'jpeg_quality', 'tgm_image_full_quality' );
add_filter( 'wp_editor_set_quality', 'tgm_image_full_quality' );
/**
 * Filters the image quality for thumbnails to be at the highest ratio possible.
 *
 * Supports the new 'wp_editor_set_quality' filter added in WP 3.5.
 *
 * @since 1.0.0
 *
 * @param int $quality The default quality (90)
 * @return int $quality Amended quality (100)
 */
function tgm_image_full_quality( $quality ) {
 
    return 100;
 
}

//Get jQuery
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'my_scripts_method');

function returnId() {
  global $post, $post_id;
  return $post->ID;
}

function returnContent($pid) {
  $my_postid =  $pid; //This is page id or post id
  $content_post = get_post($my_postid);
  $content = $content_post->post_content;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

function get_excerpt($l) {
  $e = substr(get_the_excerpt(), 0,$l);
  return $e;
}

function randomImagesHeader() {
  $page = get_page_by_title('Slider Topo');
  $images = get_field('slider', $page->ID); 
  shuffle($images);
  echo 'background-image: url('. $images[0]['slide'] .');';
}

/**
 * Theme Options
 */
require_once ( get_stylesheet_directory() . '/theme-options.php' );

?>