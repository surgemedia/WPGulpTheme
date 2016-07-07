 
<?php if($vars['type'] == 'accordion') { ?>
<div class="panel-group molecule tabs" role="tablist" aria-multiselectable="true">
	<?php
	$vars['loop_size'] = sizeof($vars['tab']);
	for ($i=0; $i < $vars['loop_size']; $i++) { 	
	 	get_component([
			 'template' => 'atom/accordion-single',
			 'vars' => [
			 						'title' => $vars['tab'][$i]['title'],
			 						'content' => $vars['tab'][$i]['content'],
			 						'collapse_id' => rand(),
			 						'trigger_id' => rand(),
			 						],
			]);
	 }
	 unset($i);
			 ?>
  </div>
<?php } elseif($vars['type'] == 'tab'){  ?>
<div>
 <ul class="nav nav-tabs" role="tablist">
 <?php $vars['loop_size'] = sizeof($vars['tab']); ?>
 <?php for ($i=0; $i < $vars['loop_size']; $i++) { 
 		$vars['tab'][$i]['slug'] = rand(); ?>
    <li role="presentation" class="<?php if($i == 0){echo 'active'; } ?>"><a href="#<?php echo $vars['tab'][$i]['slug']; ?>" aria-controls="home" role="tab" data-toggle="tab"><?php echo $vars['tab'][$i]['title'] ?></a></li>
	<?php } unset($i); ?>
  </ul>
	
  <!-- Tab panes -->
  <div class="tab-content">
    <?php for ($i=0; $i < $vars['loop_size']; $i++) {  ?>
	    <div role="tabpanel" class="tab-pane <?php if($i == 0){echo 'active'; } ?>" id="<?php echo $vars['tab'][$i]['slug']; ?>">
			<?php echo $vars['tab'][$i]['content']; ?>
	    </div>
		<?php } ?>
  </div>
</div>
<?php } ?>