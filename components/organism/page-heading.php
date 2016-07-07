<section class="page-heading <?php echo $vars['class'] ?>">
	<img class="top-banner" src="<?php echo $vars["image"]; ?>" alt="">

	<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			$button_array = "";
			if(in_array("button", $vars['option'])){
				$button_array = get_component([
																'template' => 'atom/link',
																'return_string' => true,
																'vars' => [
																			"class" => 'btn text-uppercase pull-left',
																			"text" => $vars['button'][0]['text'],
																			"url" => $vars['button'][0]['link_location'],
																			'toggle' => ''
																			]
																]);
														
			}
			get_component([ 'template' => 'molecule/card',
											'remove_tags' =>  ['img'],
											'vars' => [
														"class" => 'card container padding-4',
														"subtitle" => $vars["subtitle"],
														"title" => $vars["title"],
														"content" => apply_filters('the_content',  $vars["content"]),
														"button" => $button_array
														]
											 ]);
	 ?>

</section>