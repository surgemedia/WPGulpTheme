<article class="<?php echo $vars['class'] ?>  molecule card">
	<div class="wrapper">
<?php if(isset($vars["image"]) && strlen($vars["image"]) > 0) { ?>
	<img class="img-responsive" src="<?php echo $vars["image"]?>" alt=""></img>
	<?php } ?>
	<hgroup>
		<h1><?php echo $vars["title"]?></h1>
		<h6><?php echo $vars["subtitle"]?></h6>
	</hgroup>
	<?php if(isset($vars["content"]) && strlen($vars["content"]) > 0) { ?>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
		<?php } ?>
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
	</div>
</article>