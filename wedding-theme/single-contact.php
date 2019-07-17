<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<header>
				<?php the_title('<h1>', '</h1>'); ?>
			</header>
			<?php echo the_content(); ?>
			<?php 
			$bookImage = get_field( 'book_image' ); ?>
			<img class="img-responsive" src="<?php echo $bookImage ?>" />
		</div>
	</div>
</div>


<?php endwhile; endif; ?>
<?php get_footer(); ?>