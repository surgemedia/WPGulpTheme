<?php 
/*=============================
=            Staff            =
=============================*/

	if($cpt_enabled['staffs']){
	$post_type = new CPT([
	    'post_type_name' => 'staff',
	]);
	$post_type->menu_icon("dashicons-nametag");
	//Define post type
	$post_type->register_taxonomy([
	    'taxonomy_name' => 'staff_category',
	]);
	}
	 ?>