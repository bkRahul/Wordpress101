 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
	
	<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink() )), ' ( Standard Post )</a></h2>'); ?>

</header>


			<p><?php the_content(); ?></p><div class="post-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>

			<small>Posted on <?php the_time(); ?> in <?php the_category(); ?></small>

			<hr/>
 	
</article>