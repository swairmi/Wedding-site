<?php get_header();?>



<div class="container">
	<div class="firsttitle">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1 class="maintitletop" ><?php the_title(); ?></h1>
		<p class="supportingtext" ><?php the_content(); ?></p>

<P>This is a test, so if you see this your at least doing somthing right <?php the_content(); ?></P>

	</div>
</div>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria, basically do it again mate. ?'); ?></p>
<?php endif; ?>



<?php get_footer();?>