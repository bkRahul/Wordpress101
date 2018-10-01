
<article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>

 
				<?php the_title( sprintf('<h2 class="entry-title" style="text-align:center"><a href="%s">', esc_url(get_permalink() )), ' ( Image Post ) </a></h2>'); ?>

			 </p><div class="post-thumbnail" style="text-align: center;"><?php the_post_thumbnail('medium', array( 'class' => 'img-responsive' )); ?></div>

			<small>Posted on <?php the_time(); ?> in <?php the_category(); ?></small>

</article>
			<hr/>
 