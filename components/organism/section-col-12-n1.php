<section class="container-fluid">
 	<?php 
		unset($element_file);
		unset($element_vars);
		for ($i=0; $i < sizeof($vars['element']); $i++) { 
			$element_file = $vars['element'][$i]['acf_fc_layout']; //get file
			$vars['element'][0]['class'] = 'col-md-12';
			unset($vars['element'][$i]['acf_fc_layout']); // remove file from array leveling only vars
			$element_vars = $vars['element'][$i];
			get_component([
		 		'template' => 'molecule/'.$element_file,
		 		'vars' => $element_vars
				]);

				unset($element_file);
				unset($element_vars);
		}
				unset($i);
		
		 ?>
</section>