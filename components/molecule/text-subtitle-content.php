<article class="<?php echo $vars['class'] ?> text-subtitle-content">
	<hgroup>
		<h1><?php echo $vars["title"]?></h1>
		<h6><?php echo $vars["subtitle"]?></h6>
	</hgroup>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
</article>