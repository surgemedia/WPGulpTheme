<?php
//Theme Settings Page
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Site Details',
    'menu_title'  => 'Site Details',
    'menu_slug'   => 'general-settings',
    'capability'  => 'edit_posts',
    'icon_url' => 'dashicons-admin-site',
	'position' => 2
  ));
  
}
