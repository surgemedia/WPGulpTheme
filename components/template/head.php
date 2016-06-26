<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:url"                content="<?php the_permalink() ?>" />
  <meta property="og:site_name"                content="<?php get_bloginfo('name'); ?>" />
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="<?php the_title() ?>" />
	<meta property="og:description"        content="<?php the_content() ?>" />
	<meta property="og:image"              content="<?php echo getFeaturedUrl(); ?>" />
  <?php wp_head(); ?>
</head>
