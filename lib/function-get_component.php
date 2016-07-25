<?php 
/*=====================================
=            Add Component            =
=====================================*/
//Example Use
// get_component([
// 		'template' => 'components/page-header',
// 		'vars' => [
//					'title Var'
//					]
// ]);
function get_component($files = Array()){
			/*================================
			=            Varibles            =
			================================*/
			$styleDir = ''; //where is you css dir (optional)
			$compDir = 'components/'; //where are your comps (optional)
			$errors = []; //empty error array what be be filled.
			$return_string = false; //echo by default
			$component = false;
			if(isset($files['vars'])){
				$vars = $files['vars']; //gets vars
			}
			if(isset($files['return_string'])){
				$return_string = $files['return_string'];
			}
			ob_start(); //start object buffer 
			if(locate_template($compDir.$files['template'].'.php') != ''){
			$component = include(locate_template($compDir.$files['template'].'.php')); //instead of echoing it, its stored 
			}
			if($component == false){
				$error_message = 'BUILDER: Can not find the file '.$files['template'].' in folder '.$compDir;
				include(locate_template('components/template/no-section-warning.php'));
				echo '<script> console.error("'.$error_message.'")</script>';
			}
			$component = ob_get_clean(); //set var to the stored buffer ( i believe this flats the vars)
			/*=================================================
			=    Add Inline Scoped Styles (Optional)            =
			=================================================*/
			$files['concatStyles'] = NULL;
			if(isset($files['styles'])){
				for ($i=0; $i < sizeof($files['styles']); $i++) { 
					//add into on string and add to bucket
					$files['concatStyles'] .= " ".file_get_contents($styleDir.$files['styles'][$i].'.css');
				}
			}
			/*=================================================
			=       Filter out tags you don't want            =
			=================================================*/
			if(isset($files['remove_tags']) && sizeof($files['remove_tags']) > 0){
				$tags = [];
				$sizeof = sizeof($files['remove_tags']);
				for ($i=0; $i < $sizeof; $i++) { 
					if(isset($files['remove_tags'][$i])){
						$component = strip_tags_content($component,'<'.$files['remove_tags'][$i].'>',TRUE);
					}	
				}
			}
			/*================================================
			=            Return Comp or Echo Comp            =
			================================================*/
			if(true == $return_string){
				return $component; //dont echo it allow it to be returned later;
			} else {
				echo $component;
			}
			unset($files); // unset file array
			unset($vars); //unset vars so no population
			}


			/*==================================
			=            Dependency            =
			==================================*/
			function strip_tags_content($text, $tags = '', $invert = FALSE) { 

			  preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags); 
			  $tags = array_unique($tags[1]); 
			    
			  if(is_array($tags) AND count($tags) > 0) { 
			    if($invert == FALSE) { 
			      return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text); 
			    } 
			    else { 
			      return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $text); 
			    } 
			  } 
			  elseif($invert == FALSE) { 
			    return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text); 
			  } 
			  return $text; 
			} 

?>