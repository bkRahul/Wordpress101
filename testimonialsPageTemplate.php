<?php 

/* 

Template Name: Custom Testimonial Template

*/
?>

<?php get_header(); ?>

  <h1>Custom Testimonial Template</h1>

<?php

$args = array('post_type'=>'testimonials',
			  'post_per_page'=>3);

$loop = new WP_Query($args);

	if($loop->have_posts()):

		while($loop->have_posts()) : $loop->the_post(); 

			get_template_part('content-testimonials', get_post_format()); ?>
 
<?php	

		endwhile;

	endif;  

?>
 
<?php get_footer(); ?>  