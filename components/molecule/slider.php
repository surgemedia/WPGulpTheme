  <div class="owl-carousel molecule slider">
  <?php 
    //debug($vars);
    if($vars['slide_objects'] == 'Website Items') { 
  $args = array(
          'post__in'      => $vars['website_items'],
          'post_type' => 'any'
        );

        // The Query
        $vars['slider_core'] = new WP_Query( $args );

        // The Loop
        if ( $vars['slider_core']->have_posts() ) {
          
          while ( $vars['slider_core']->have_posts() ) {
            $vars['slider_core']->the_post();
              get_component([
              'template' => 'molecule/img-text',
              'remove_tags' => ['img'],
               'vars' => [
                    'class' => 'item active text-center',
                    'title' =>   get_the_title(),
                    'content' => get_the_content(),
                    ]
                  ]);
            
          }
        } else {
          // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();

  } elseif($vars['slide_objects'] == 'Manual') {

      for ($vars['i']=0; $vars['i'] < sizeof($vars['manual_slider']); $vars['i']++) {

               get_component([
              'template' => 'molecule/img-text',
              'vars' => [
                    'class' => 'item active text-center',
                    'title' => $vars['manual_slider'][$vars['i']]['title'],
                    'content' => $vars['manual_slider'][$vars['i']]['content'],
                    'img' => $vars['manual_slider'][$vars['i']]['image'],

                    ]
                  ]);
      }
  } 
    ?>
  </div>