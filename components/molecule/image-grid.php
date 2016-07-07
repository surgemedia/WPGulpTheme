<?php //debug($vars) ?>
<div class="<?php echo $vars['class'] ?> molecule image-grid ">
  <ul class="list-inline">
        <?php

        foreach ($vars['image_list'] as $item) {?>
          <li class='col-md-<?php echo $vars['column_number']?>' >
            <img class="img-responsive" alt="<?php echo  $item['description']; ?>" src="<?php echo $item['image']; ?>"></img>
            <small class="text-center col-xs-12"><?php echo  $item['description']; ?></small>
          </li>
        <?php }

        ?>
      </ul>
</div>