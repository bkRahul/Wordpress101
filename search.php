<?php get_header(); ?>

<div class="container">
<div class="row">


 <?php

 
 

	if(have_posts()):  

		while( have_posts()) :  the_post(); ?>
 
<?php get_template_part('content', 'search');  ?>

<?php 	endwhile;


	endif;  

	wp_reset_postdata();	
 
?>
 
</div>
</div>

<?php 

get_footer();

?>


<style type="text/css">
	.carousel-inner {
		background-color: #393b53;
	}
</style>