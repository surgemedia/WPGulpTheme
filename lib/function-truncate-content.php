<?php 
/*=========================================
=            Truncated Content           =
=========================================*/
function truncate($content,$cap,$ellipsis) {
	//get the content 
	$tail = NULL;
	$b4trunk = explode(' ', $content);
	$truck_slice = array_slice($b4trunk, 0,$cap );
	//Puts it in an array and limits to the cap (number of words)
	$truck_string = implode(' ', $truck_slice);
	if($cap < sizeof($b4trunk)){
		$tail = " ".$ellipsis;
	} 
	//kinda like serving a cake : you explode it, cut it up, and serve it on a plate
	$trunk = strip_tags($truck_string).$tail; 
	echo $trunk; 
}