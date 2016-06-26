<div class="form <?php echo $vars['class'] ?>">
		<img src="<?php echo $vars['image'] ?>" height="100px" width="auto" alt="<?php echo $vars['title'] ?>">
		<p><?php echo apply_filters('the_content',  $vars["content"]); ?></p>
    <?php displayGravityForm($vars["form"]) ?>
</div>