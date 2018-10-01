<?php get_header(); ?>
 
<div class="row">

<?php 

//Print the latest Posts from each Category

	$posts_category = array(
				'include' => '7, 8, 6'
				);

	$categories = get_categories($posts_category);

	foreach ($categories as $category) :

	$args = array(
			'type' => 'post',
			'posts_per_page' => 1,
			'category__in' => $category->term_id,
			'category__not_in' => array(9),
		);

	$lastBlog = new WP_Query($args);

		if ( $lastBlog->have_posts() ) :
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
 
<div class="col-md-4">

	<?php	get_template_part( 'content', 'featured' ); ?>

</div>

<?php	endwhile;

	endif;		

	wp_reset_postdata();	

	endforeach;	?>

</div>
 
<div class="row">

	<div class="col-xs-12 col-md-8">

	<?php

		if(have_posts()):

			while(have_posts()) : the_post(); 

				get_template_part('content',get_post_format());

		endwhile;

	endif;  


//Print 2 Posts Except the First One

		$lastBlog = new WP_Query('type=post&posts_per_page=2&offset=1');

			if ( $lastBlog->have_posts() ) :
			
				while( $lastBlog->have_posts() ): $lastBlog->the_post();

					get_template_part( 'content', get_post_format() );

				endwhile;

			endif;		

		wp_reset_postdata();	?>

</div>

<div class="col-xs-12 col-md-4">

	<?php get_sidebar(); ?>

</div>


<div class="col-xs-12 col-md-12">

<?php

//Print only tutorials category

		$lastBlog = new WP_Query('type=post&category_name=tutorials');

		if ( $lastBlog->have_posts() ) :
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;

		endif;		

	wp_reset_postdata();	

	 ?>

</div>

	<div class="col-xs-12 col-md-12">

	<?php 

//Print the latest Post

		$lastBlog = new WP_Query('type=post&category_name=uncategorized');

		if ( $lastBlog->have_posts() ) :
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;

		endif;		

	wp_reset_postdata();	

	 ?>

</div>


</div>

<?php get_footer(); ?>  