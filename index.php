<?php get_header(); ?>

  <h1>This is Wordpress101</h1>

<div class="row">

<div class="col-xs-12 col-md-8">

<?php

	if(have_posts()):

		while(have_posts()) : the_post(); 

			get_template_part('content',get_post_format());

		endwhile;

	endif;  

?>

</div>


<div class="col-xs-12 col-md-4">

<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer(); ?>  