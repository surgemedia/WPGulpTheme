<section class="container padding-6 <?php echo $vars['class'] ?>">
<?php
			//debug($vars);
			/*=============================================
			= Card (Class,Image,Title,Content)
			= @components
				+ molecule/card-img-side
			=============================================*/

			get_component([ 'template' => 'molecule/card-img-side',
							'remove_tags' =>  $vars['remove_elements'],
											'vars' => [
														"class" => 'col-md-6 card para',
														"title" => $vars["title"],
														"subtitle" => $vars["subtitle"],
														"content" => apply_filters('the_content',  $vars["content"]),
														"image" => $vars['image'],
														"image_position" => $vars['image_position'],

															"button" => get_component([
																'template' => 'atom/link',
																'return_string' => true,
																'vars' => [
																			"class" => 'btn text-uppercase pull-left',
																			"text" => $vars['button'][0]['text'],
																			"url" => $vars['button'][0]['link_location'],
																			]
																])
														]
											 ]);

			
?>
</section>