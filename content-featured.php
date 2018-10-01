
 


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
	
	<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink() )), ' ( Featured Post )</a></h2>'); ?>

</header>


			<div class="post-thumbnail" style="text-align: center;"><?php the_post_thumbnail('medium'); ?></div>

			<small>Posted on <?php the_time(); ?> in <?php the_category(); ?></small>

			<hr/>
 	
</article>

 
 