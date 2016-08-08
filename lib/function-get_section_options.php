<?php 
function get_section_options($vars){
	$search;
	if(array_search("show_advanced", array_keys($vars) > 0)) {
		$search = array_search("show_advanced", array_keys($vars));
	} elseif (array_search("advanced_options", array_keys($vars)) > 0) {
		$search = array_search("advanced_options", array_keys($vars));
	};
	$tempVars = array_slice($vars, $search);
	$sizeof = sizeof($tempVars);
	foreach ($tempVars as $key => $value) {
    		if(is_array($tempVars[$key])){
    					if(isset($tempVars[$key][0])){
                $tempVars[$key] = $tempVars[$key][0];
                }
    		}	
	    }
	    // debug($tempVars);
	    return $tempVars;
    };
