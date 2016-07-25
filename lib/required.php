<?php 
$custom_includes = [
  /* Utilitys */
  'lib/nav-walker.php',    // Scripts and stylesheets
  'lib/acf-option-page.php', //ACF Option Page
  'lib/gravity_forms-v5.php',
  'lib/custom_post_type_class.php',    // Create Custom Post Types
  'lib/builder-fields.php',    // Create Custom Post Types
  /* Functions */
  'lib/function-debug.php',    // Scripts and stylesheets
  'lib/function-display-gravity-form.php',    // Scripts and stylesheets
  'lib/function-get_component.php',    // Scripts and stylesheets
  'lib/function-get_id_from_slug.php',    // Scripts and stylesheets
  'lib/function-get-featured-image-url.php',    // Scripts and stylesheets
  'lib/function-truncate-content.php',    // Scripts and stylesheets
  'lib/function-get_section_options.php',    // Scripts and stylesheets

  // 'lib/create-home-page.php',    // Create Custom Post Types
];

function includeRequired($custom_includes){
 foreach ($custom_includes as $file) {
  try {
    require_once(locate_template($file));
    // throw new Exception('File Not Found');
  } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }  
}

};
includeRequired($custom_includes);

?>