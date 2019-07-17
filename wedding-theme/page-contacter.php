

<?php
/*
Template Name: ayyy gringo
*/
?>



<?php get_header();?>

<div class="container">
	<div class="firsttitle">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1 class="maintitletop" ><?php the_title(); ?></h1>
		<p class="supportingtext" ><?php the_content(); ?></p>

<?php endwhile; else : ?>
	<p><?php _e( 'sorry mate nothings here. no pages, git gud' ); ?></p>
<?php endif; ?>

	</div>
</div>


<?php get_footer();?>