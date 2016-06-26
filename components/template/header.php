<header class="banner hide-print">
  <div class="container-fluid">
    <?php 
      get_component([
            'template' => 'atom/brand',
            'vars' => [
                        'logo' => get_field('logo','option')
                      ]
      ]);
      ?>
    <div class="col-md-3 pull-right">
            
          <ul class="list-inline">
          <?php 
          $social_repeater = get_field('contact_details', 'option');
          for ($social_i=0; $social_i < sizeof($social_repeater); $social_i++) { ?>
            <li>
                <a href='<?php echo $social_repeater[$social_i]['clickable_text']; ?>'>
                    <i class="<?php echo $social_repeater[$social_i]['icon'] ?>">
                    </i>
                </a>
            </li>
         <?php } ?>
    </ul>
    <div class="phone">
       <i class="icon-telephone">
                </i>
                <a href="tel:<?php echo get_field('phone', 'option');?> ">
                  <?php echo get_field('phone', 'option');?>
                </a>
    </div>
        </div>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <nav class="nav-primary">
       <?php
        if (has_nav_menu('primary_navigation')) :
           wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
        endif;
      ?>
      
      </nav>
    </div>
      
  </div>
</header>
<body <?php body_class() ?>>
