<section class="container-fluid">
<?php

	unset($vars['element'][0]['acf_fc_layout']); // remove file from array leveling only vars
	$vars['element'][0]['class'] = 'col-md-12'; //because i know this from the file name
	$element_vars = $vars['element'][0];
	get_component([
	 'template' => 'molecule/'.$element_file,
	 'vars' => $element_vars
			]);
	unset($element_file);
	unset($element_vars);
 ?>
</section>