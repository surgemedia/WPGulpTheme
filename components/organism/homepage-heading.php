<section class="homepage-heading owl-carousel" >
    <?php
      foreach ($vars['element'] as $key => $value) { ?>
      <?php //debug($vars); ?>
     <div class="slide" style="background-image: url('<?php echo $value['background'] ?>');">
       <?php  get_component([ 'template' => 'molecule/card',
                         'remove_tags' =>  [],
                         'vars' => [
                               "class" => 'container card',
                               "title" => $value['title'],
                               "subtitle" => $value["subtitle"],
                               // "content" => get_the_content(),
                               "button" => get_component([
                                   'template' => 'atom/button-list',
                                   'return_string' => true,
                                   'vars' => ["button_list"=>$value["button"]]
                                   ])
                               ]
                          ]);?>
      </div>
      <?php }
    ?>
</section>
