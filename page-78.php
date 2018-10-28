<?php get_header(); ?>

<div class="row">
	<div class="col-md-12">
<div id="wordpress101" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" role="listbox">


<?php 

//Print the latest Posts from each Category

	$posts_category = array(
				'include' => '7, 8, 6'
				);

	$categories = get_categories($posts_category);


	$count = 0;
	$bullets = '';
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
 
    <div class="carousel-item <?php if ($count==0):  echo 'active'; endif; ?>">
			 <?php the_post_thumbnail('medium'); ?> 
			  <div class="carousel-caption d-none d-md-block">
			  		<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink() )), ' ( Featured Post )</a></h2>'); ?>
			  					<small>Posted on <?php the_time(); ?> in <?php the_category(' '); ?></small>

 
 
  <?php $bullets .= '<li data-target="#wordpress101" data-slide-to="'.$count.'" class="'; ?>
						    <?php if($count == 0): $bullets .='active'; endif; ?>
						    
						    <?php  $bullets .= '"></li>'; ?>
						
 
			  </div>
    </div>

<?php endwhile;

	endif;		

	wp_reset_postdata();	

	$count++;  endforeach;	?>




  </div>
  <a class="carousel-control-prev" href="#wordpress101" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#wordpress101" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
			<!-- Indicators -->
			  <ol class="carousel-indicators">
			    <?php echo $bullets; ?>
			  </ol>

			</div>
</div>
</div>


<div class="container">
<div class="row text-center">


 <?php

 

	$args = array(
			'type' => 'post',
			'posts_per_page' => 6,
 		);

$the_query = new WP_Query( $args );

	if($the_query->have_posts()):  $grid_post = 0;

		while($the_query->have_posts()) : $the_query->the_post(); ?>
  <?php

   if($grid_post==0): $col=12;
   elseif($grid_post > 2): $col=4;
   elseif($grid_post>0 && $grid_post<=2 ): $col=6; 
   endif;

?>

	<div class="col-md-<?php echo $col; ?>">
 
 			<div class="post-thumbnail" style="text-align: center;"><?php the_post_thumbnail('medium'); ?></div>
 
 	</div>

 <?php	 $grid_post++;		endwhile;


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