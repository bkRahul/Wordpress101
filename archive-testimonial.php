<?php get_header(); ?>

  <h1>Archive</h1>

<div class="row">

<div class="col-xs-12 col-md-8">


		<header class="page-header text-center">
<?php
		
			the_archive_title('<h1 class="page-title">','</h1>');
			the_archive_description('<div class="taxonomy-description">', '</div>');

 ?>
		</header><hr>

<?php

	if(have_posts()):

		while(have_posts()) : the_post(); 

			get_template_part('content-archive',get_post_format());

		endwhile; ?>


<div style="text-align: center;"><?php next_posts_link('<< Older Posts'); ?>&nbsp;<?php previous_posts_link(' Newer Posts >>'); ?></div>


<?php	endif;  

?>

</div>


<div class="col-xs-12 col-md-4">

<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer(); ?>  