<?php get_header(); ?>

  <h1>This is Wordpress101</h1>

<div class="row">

<div class="col-xs-12 col-md-8">

<?php

$currentPage=(get_query_var('paged')) ? get_query_var('paged') : 1;

$args=array('posts_per_page' => 4, 'paged' => $currentPage);

query_posts($args);

	if(have_posts()):

		while(have_posts()) : the_post(); 

			get_template_part('content',get_post_format());

		endwhile; ?>


<div style="text-align: center;"><?php next_posts_link('<< Older Posts'); ?>&nbsp;<?php previous_posts_link(' Newer Posts >>'); ?></div>


<?php	endif;  

wp_reset_query();

?>

</div>


<div class="col-xs-12 col-md-4">

<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer(); ?>  