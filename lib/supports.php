<?php 

add_action( 'init', 'removeSupports_post' );
function removeSupports_post() {
	remove_post_type_support( 'post', 'excerpt' );
	remove_post_type_support( 'post', 'thumbnail' );

}

function removeSupports_page() {
	remove_post_type_support( 'page', 'editor' );
	remove_post_type_support( 'page', 'thumbnail' );

}

add_action( 'init', 'removeSupports_page' );


function admin_style() {
  // wp_enqueue_style('admin-styles', get_template_directory_uri().'/style.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

 ?>