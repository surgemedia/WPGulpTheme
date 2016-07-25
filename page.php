
<?php
if (is_front_page()){ ?>
<?php 
	get_component([ 'template' => 'organism/homepage-heading',
											'remove_tags'=> get_field('remove_elements'),
											'vars' => [
														"class" => 'padding-4',
														"element" => get_field('slides'),
														"category_slides" => get_field('category_slides')


														]
											 ]);
 ?>
<?php }else{ ?>
<?php 
	get_component([ 'template' => 'organism/page-heading',
											'remove_tags'=> get_field('remove_elements'),
											'vars' => [
														"class" => '',
														"title" => get_field('title'),
														"subtitle" => get_field('subtitle'),
														"content" => get_field('content'),
														"background" => get_field('background'),
														"image" => get_field('image'),
														"button" => get_field('button'),

														]
											 ]);
 ?>
<?php } ?>
<?php  ?>
<div class="row">
<?php
$layout_builder = get_field('layout');
//is there block?
if(isset($layout_builder[0]) && !is_front_page()){
foreach ($layout_builder as $key => $value) {
	$section_file = $value['acf_fc_layout'];
	if(isset($section_file)){
	unset($value['acf_fc_layout']); //of section
	
	//Section Options
	$value['section_data'] = get_section_options($value);
	$value['section_classes'] = 'class="'.$section_file.' '.$value['section_data']['border'].' '.$value['section_data']['background_color'].' '.$value['section_data']['section_width'].' '.$value['section_data']['padding'].' '.$value['section_data']['margin'].' '.$value['section_data']['text_align'].'"';
	$value['section_id'] = 'id="'.$value['section_data']['id'].'"';
	$value['section_style'] = 'style="background-image:url('.$value['section_data']['background_image'].');"';


	//Call file for display
			get_component([
						'template' => 'organism/'.$section_file,
						'vars' => $value
			]);
				
				}
		unset($section_file);
	}
} else {
	get_component([
						'template' => 'template/no-section-warning',
						'vars' => []
			]); ?>
			<section id="" class="white-bg container padding-4 margin-0 text-left" >
 	<article class="col-md-12  molecule card">
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
		</article>
</section>
<?php } ?>
</div>