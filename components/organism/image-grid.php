<section <?php echo $vars['section_id'].' '.$vars['section_classes'].' '.$vars['section_style'] ?>>

<?php if($vars['title']) { ?>
	<h1 class="text-center"><?php echo $vars['title']; ?></h1>
<?php } ?>
<?php
	//debug($vars);
	$vars['class'] = 'col-md-12'; //because i know this from the file name
	$element_vars = $vars;
	get_component([
	 'template' => 'molecule/image-grid',
	 'vars' => $element_vars
			]);
	unset($element_file);
	unset($element_vars);
 ?>
</section>