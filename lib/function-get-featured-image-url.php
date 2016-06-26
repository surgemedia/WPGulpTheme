<?php
/*=========================================
=         get featured image url            =
=========================================*/
//Call inside the loop

function getFeaturedUrl($id = NULL, $size = 'full'){
if(NULL != $id){
	$thumb_id = get_post_thumbnail_id($id);
} else {
$thumb_id = get_post_thumbnail_id();
}
$thumb_url_array = wp_get_attachment_image_src($thumb_id, $size, true);
$thumb_url = $thumb_url_array[0];
return $thumb_url;
}