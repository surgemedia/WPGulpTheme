<?php if(!isset($vars['background_image'])){ 
		 $vars['background_image'] = $vars['image'];
	}
	?>

<section <?php echo $vars['section_id'].' '.$vars['section_classes'].' '.$vars['section_style'] ?>>
<div class="container">
	<div class="col-md-6 pull-right">
		<div class="box">
		<?php 
		unset($element_file);
		unset($element_vars);
		for ($i=0; $i < sizeof($vars['element']); $i++) { 
			$element_file = $vars['element'][$i]['acf_fc_layout']; //get file
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
		</div>
		</div>
	</div>
</section>