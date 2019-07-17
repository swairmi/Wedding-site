<?php
/*
Template Name: color bananer
*/
?>
<?php get_header();?>



<div class="container">
	<div class="firsttitle">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
<p style="color: red; font-size:1000px;">thththththththththththththththt</p>
<?php endwhile; endif; ?>

	</div>
</div>




<?php get_footer();?>