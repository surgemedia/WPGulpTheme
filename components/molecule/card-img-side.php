<?php
	//debug($vars['image_position']);


 if($vars['image_position'] == 'Right Side'){ 
	$vars['card_class'] = 'pull-left';
	$vars['img_class'] = 'pull-right';
	} else {
		$vars['card_class'] = 'pull-right';
		$vars['img_class'] = 'pull-left';
	}
?>
<article class="col-md-6 <?php echo $vars['class'] ?> <?php echo $vars['card_class'] ?>">
	<hgroup>
		<h6><?php echo $vars["subtitle"]?></h6>
		<h1><?php echo $vars["title"]?></h1>
	</hgroup>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
<?php if(isset($vars['button'][0]['text']) != 0){ ?>
		<?php if(is_array($vars['button']) == 1){ ?>
			<?php
				get_component([
								'template' => 'atom/link',
								'vars' => [
									"class" => 'btn text-uppercase',
									"text" => $vars['button'][0]['text'],
									"link" => $vars['button'][0]['link'],
									]
				]);
																 ?>
		<?php } else { ?>
		<?php echo $vars['button']; ?>
		<?php } ?>
	<?php } ?>
</article>
<div class="col-md-6 <?php echo $vars['img_class'] ?> text-center">
		<img class="img-responsive rounded" src="<?php echo $vars['image'] ?>" alt="">
</div>