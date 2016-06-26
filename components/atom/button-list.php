<ul class="button-list">
	<?php foreach ($vars['button_list'] as $button) {?>
	<li class="<?php echo $button['class'] ?>">
		<a href="<?php echo $button['url'] ?>"> <?php echo $button['text']; ?> </a>
	</li>
	<?php } ?>
</ul>