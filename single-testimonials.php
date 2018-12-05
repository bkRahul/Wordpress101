 
<?php get_header(); ?>

<div class="row">

<div class="col-sm-12 col-md-8">

	<div class="col-xs-12 text-center">
<?php	if(have_posts()):

		while(have_posts()) : the_post(); 
	 the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink() )), ' </a></h2>'); ?>



	<p><small>Posted on <?php the_time(); ?> in 

		<?php 	echo wordpress101_get_custom_tax_term($post->ID, 'field')	 ?> || 

		<?php 	echo wordpress101_get_custom_tax_term($post->ID, 'services')	 ?>

		<?php if(current_user_can('manage_options')) {echo '|| '; edit_post_link();} ?></small></p>
 
	</div>

	<div class="row">

	<div class="col-xs-12 col-md-12 center" style="text-align: center;">
	
		<div class="post-thumbnail testimonial-img"><?php the_post_thumbnail('medium'); ?></div>

	</div>
	
	<div class="col-xs-12 col-md-12 center">


	 <?php the_content( ); ?>

 <?php 	endwhile; ?>

<?php	endif;  ?>

</div>

</div> 
<div style="text-align: center;"><?php previous_post_link(); ?> &nbsp; <?php next_post_link(); ?></div>

</div>

<div class="col-sm-12 col-md-4">
	<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>  