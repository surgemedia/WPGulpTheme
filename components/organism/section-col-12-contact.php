<section class="container-fluid bg-cover padding-6 paragraph-overlay <?php echo $vars['class']?>" style=" background-image: url('<?php echo $vars['image'];?>');">
	<div class="col-md-4 col-md-offset-4 text-center">
		<div class="box">
		<?php 
		get_component([ 'template' => 'molecule/card',
							'remove_tags' =>  ['img'],
											'vars' => [
														"class" => 'title',
														"title" => $vars["title"],
														"subtitle" => $vars["subtitle"],
														"content" => apply_filters('the_content',  $vars["content"]),
															"button" => ''
														]
											 ]);
		get_component([ 'template' => 'molecule/form',
							'remove_tags' =>  ['h2','p'],
											'vars' => [
														"class" => 'form text-center',
														"form" => $vars["form"],
														]
											 ]);
		 ?>
		</div>
	</div>
</section>