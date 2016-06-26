<div class="form <?php echo $vars['class'] ?>">
		<h2><?php echo $vars["title"]?></h2>
		<p><?php echo apply_filters('the_content',  $vars["content"]); ?></p>
    <?php displayGravityForm($vars["form"]) ?>
</div>