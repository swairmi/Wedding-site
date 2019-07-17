<?php
/*
Template Name: Portfolio Page
*/
?>
<?php get_header();?>



<div class="container">
	<div class="firsttitle">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>

<?php endwhile; endif; ?>

	</div>
</div>

<?php 

	$args = array(
	 'post_type' => 'portfolio'
	);
	$query = new WP_Query( $args );
?>

<!-------------FIRST TRIO OF BOXES----------------->
<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
<!--------->






<?php endwhile; endif; wp_reset_postdata(); ?>
<!-------------FIRST TRIO OF BOXES----------------->

<?php get_footer();?>