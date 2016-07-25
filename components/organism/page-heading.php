<?php 
if(!isset($vars["title"]) OR strlen($vars["title"]) <= 0){
					$vars["title"] = get_the_title();

			}
if(!isset($vars["background"]) OR strlen($vars["background"]) <= 0){
					$vars["background"] = get_field('default_page_heading_image','options');
			}



 ?>
<section class="page-heading <?php echo $vars['class'] ?>" style="background-image:url(<?php echo $vars["background"]; ?>)">

	<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			if(!isset($vars["title"]) OR strlen($vars["title"]) <= 0){
					$vars["title"] = get_the_title();

			}

			get_component([ 'template' => 'molecule/card',
											'vars' => [
														"class" => 'card container padding-4',
														"subtitle" => $vars["subtitle"],
														"title" => $vars["title"],
														"image" => $vars["image"],
														"content" => apply_filters('the_content',  $vars["content"]),
														"button" => $vars['button']
														]
											 ]);
	 ?>

</section>