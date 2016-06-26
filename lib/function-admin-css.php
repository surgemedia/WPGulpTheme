<?php 
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    .acf-flexible-content .layout .acf-fc-layout-handle {
    	//background:#F1F1F1;
    }
    .acf-flexible-content .layout {
    	margin-top:3em;
    	//border: 1px solid #0085BA;
    }
  </style>';
}
 ?>