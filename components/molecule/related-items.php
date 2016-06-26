<div class="">
	   <?php

			  // WP_Query arguments
			$args = array (
			  "post_type" => "any",
			  "post__in" => $vars['website_items']
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
			  while ( $query->have_posts() ) {
			    $query->the_post();
			     /*=============================================
			      = Card (Class,Image,Title,Content)
			      = @components
			        + molecule/card
			      =============================================*/
			      get_component([ 'template' => 'molecule/card',
			                      'vars' => [
			                            "class" => 'col-md-3 card',
			                            "title" => get_the_title(),
			                            "image" => get_field("image"),
			                            "content" => get_the_content(),
			                            "button" => get_component([
			                                'template' => 'atom/link',
			                                'return_string' => true,
			                                'vars' => [
													"class" => 'btn text-uppercase pull-left',
													"text" => "Read More",
													"url" => get_permalink()
																						]
			                                ])
			                            ]
			                       ]);
			  }
			} else {
			  // no posts found
			}

			// Restore original Post Data
			wp_reset_postdata();
			    ?>
	  </div>