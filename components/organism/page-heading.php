<?php //debug($vars) ?>
<section class="jumbotron owl-carousel bg-cover padding-6"  style="background-image:url(<?php echo $vars["image"]?>)">
	<div class="container">
	<?php for ($vars['i']=0; $vars['i'] < sizeof($vars['slides']); $vars['i']++) { ?>
	<article class="item active pull-right col-md-7" style="background-image:url(<?php echo $vars['slides'][$vars["i"]]["image"]?>)">
		<hgroup>
			<h1><?php echo $vars['slides'][$vars["i"]]["title"] ?></h1>
		</hgroup>
		<?php echo apply_filters('the_content',  $vars['slides'][$vars["i"]]["content"]); ?>
		<?php if(strlen($vars['slides'][$vars["i"]]['button'][0]['text'])){ ?>
		<a class="btn" href="<?php echo $vars['slides'][$vars["i"]]['button'][0]['href']; ?>"><?php echo $vars['slides'][$vars["i"]]['button'][0]['text']; ?></a>
		<?php } ?>
	</article>
	<?php } ?>
	</div>
</section>


