<?php 
/*=============================
=            Testimonials            =
=============================*/

	if($cpt_enabled['testimonials']){
	$testimonials = new CPT([
	    'post_type_name' => 'testimonial',
	]);
	$testimonials->menu_icon("dashicons-editor-quote");
	//Define post type
	$testimonials->register_taxonomy([
	    'taxonomy_name' => 'testimonial_category',
	]);
	}

 ?>