  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="<?php echo $vars['trigger_id'] ?>">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $vars['collapse_id'] ?>" aria-expanded="false" aria-controls="<?php echo $vars['collapse_id'] ?>">
           <?php echo $vars['title']; ?>
        </a>
      </h4>
    </div>
    <div id="<?php echo $vars['collapse_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?php echo $vars['trigger_id'] ?>">
      <div class="panel-body">
       <?php echo $vars['content']; ?>
      </div>
    </div>
  </div>