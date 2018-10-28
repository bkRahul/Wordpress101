<article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>


<div class="row">

	<div class="col-xs-12 col-md-12">

	<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink() )), ' ( Standard Post ) </a></h2>'); ?>

	</div>

	<div class="col-xs-12 col-sm-12" style="text-align: center;">
	
		<div class="post-thumbnail"><?php the_post_thumbnail('medium'); ?></div>
 
	</div>


	<div class="col-xs-12 col-sm-12">


	<p><small>Posted on <?php the_time(); ?> in <?php the_category(' '); ?></small></p>

	<p><?php the_content(); ?></p>

	
	</div>




</div>

</article>

 	<hr style="clear: both;" />