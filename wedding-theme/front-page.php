<?php
/*
Template Name: front-page
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
		'post_type' => 'portfolio');
			$query = new WP_Query( $args );
?>



<!------------TOP TRIO LOOPER----------->
<div class="container">
	<div class="row">

		<?php
			if( have_rows('image_and_text_repeater') ):
		    while ( have_rows('image_and_text_repeater') ) : the_row();

			$TopTrioImages = get_sub_field( 'image' );
			$TopTrioTitle = get_sub_field( 'title' );
			$TopTrioCopy = get_sub_field( 'copy' );
		?>


<div class="col-md-4">

	<?php 
		$TopTrioImages = get_sub_field('image');
		if( $TopTrioImages ) {
		$url = $TopTrioImages['url'];
		$title = $TopTrioImages['title'];
		$alt = $TopTrioImages['alt'];
		$caption = $TopTrioImages['caption'];
		$size = 'large';
		$thumb = $TopTrioImages['sizes'][ $size ];}
	?>
		<img class="toppertrioimages" src="<?php echo $thumb ?>" alt="<?php echo $alt ?>" />

		   
		<h2 class="toppertriotitle"><?php echo $TopTrioTitle; ?></h2>
		    <p class="toppertriodesc" ><?php echo $TopTrioCopy; ?></p>
</div>

		 <?php
			endwhile;
			else :
			endif;
		?>
	</div>
</div>
<!------------TOP TRIO LOOPER----------->





<!------------SOCIAL LOOPER----------->
<?php	
// Image field with a return value of Image Array
$SOCIALBACKING = get_field('social_backing');
echo '<div class="panel"';
if ( $SOCIALBACKING ) {
    $size = 'large';
    $large_bg_url = $SOCIALBACKING['sizes'][ $size ];
    echo ' style="background-image: url(' . $large_bg_url . ');  padding-top:60px; padding-bottom:60px; margin-top:50px; background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; "';
}
echo '>' . PHP_EOL;
?>


<div class="container" id="socialmediabanner">
	<div class="row">

		<?php
			if( have_rows('social_media_repeater') ):
		    while ( have_rows('social_media_repeater') ) : the_row();

			$SOCIALTITLE = get_sub_field( 'title' );
			$SOCIALMEDIAREPEATER = get_sub_field( 'social_media' );
			$SOICIALMEDIADESC = get_sub_field( 'SOCIALMEDIANAMES' );
		?>


		   <div class="col-md-3" id="socialbanner" >
			   <h3><?php echo $SOCIALTITLE; ?></h3>
		       		<?php echo $SOCIALMEDIAREPEATER; ?>
		       		<P class="socialdesc" ><?php echo $SOICIALMEDIADESC; ?></P>
		</div>


		<?php
			endwhile;
			else :
			endif;
		?>
	</div>
</div>
<!------------SOCIAL LOOPER----------->





<!------------ANIMATED LOOPER----------->
<div class="container">

	<div class="row">

		<?php
			if( have_rows('animated_services_repeater') ):
		    while ( have_rows('animated_services_repeater') ) : the_row();

			$ANIMATEDTITLEFIRST = get_sub_field( 'animated_title_first' );
		   	$ANIMATEDIMAGES = get_sub_field( 'animated_images' );
			$ANIMATEDTITLES = get_sub_field( 'animated_titles' );
			$ANIMATEDDESC = get_sub_field( 'animated_desc' );
		?>
<h3 class="themaintitleforanimated"><?php echo $ANIMATEDTITLEFIRST; ?></h3>



<div class="col-md-4">
	<?php 
		$ANIMATEDIMAGES = get_sub_field('animated_images');
		if( $ANIMATEDIMAGES ) {
			$url = $ANIMATEDIMAGES['url'];
			$title = $ANIMATEDIMAGES['title'];
			$alt = $ANIMATEDIMAGES['alt'];
			$caption = $ANIMATEDIMAGES['caption'];
			$size = 'large';
			$thumb = $ANIMATEDIMAGES['sizes'][ $size ];}
	?>
	<img class="animationpictures" src="<?php echo $thumb ?>" alt="<?php echo $alt ?>" />


	<h3 class="animatetitle" ><?php echo $ANIMATEDTITLES; ?></h3>
		  <P class="animatedescription" ><?php echo $ANIMATEDDESC; ?></P>

</div>
		<?php
			endwhile;
			else :
			endif;
		?>
	</div>
</div>
<!------------ANIMATED LOOPER----------->





<!------------TESTIMONIAL LOOPER----------->
<?php	
// Image field with a return value of Image Array
$TESTIBACKING = get_field('testi_backing');
echo '<div class="panels"';
if ( $TESTIBACKING ) {
    $size = 'large';
    $large_bg_url = $TESTIBACKING['sizes'][ $size ];
    echo ' style="background-image: url(' . $large_bg_url . ');  padding-top:10px; padding-bottom:150px; margin-top:50px; background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; "';
}
echo '>' . PHP_EOL;
?>

<div class="container" id="testercontain">Í

		<?php
			if( have_rows('testi_repeater') ):
		    while ( have_rows('testi_repeater') ) : the_row();

			$testTitle= get_sub_field( 'testi_title' );
			$testDesc = get_sub_field( 'testi_desc' );
			$testNames = get_sub_field( 'testi_names' );
			$testUnder = get_sub_field( 'testi_underbanner' );
		?>

			   <h4 class="testmaintitle" ><?php echo $testTitle; ?></h4>
			   <P class="testdesc" ><?php echo $testDesc; ?></P>
			   <P class="testqoutenames" ><?php echo $testNames; ?></P>

			   		   	<?php 
			$testUnder = get_sub_field('testi_underbanner');
			if( $testUnder ) {
				$url = $testUnder['url'];
				$title = $testUnder['title'];
				$alt = $testUnder['alt'];
				$caption = $testUnder['caption'];

				// thumbnail
				$size = 'large';
				$thumb = $testUnder['sizes'][ $size ];
			}
			?>

<img class="testimage" src="<?php echo $thumb ?>" alt="<?php echo $alt ?>" />
		   
		   </div>


		<?php
		    endwhile;
				else :
		// no rows found
					endif;
		?>
<!------------TESTIMONIAL LOOPER----------->





<!------------BOTTOM 6 LOOPER----------->
<div class="container">
	<div class="row">

		<?php
			if( have_rows('bottom_6_repeater') ):
		    while ( have_rows('bottom_6_repeater') ) : the_row();
		    $BOTTOM6TOPTITLE = get_sub_field( 'bottom_6_top_title' );
			$BOTTOM6IMAGE = get_sub_field( 'bottom_6_image' );
			$BOTTOM6TITLE = get_sub_field( 'bottom_6_title' );
		?>
<H4><?php echo $BOTTOM6TOPTITLE; ?></H4>
			<div class="col-md-4">

			<?php 
			$BOTTOM6IMAGE = get_sub_field('bottom_6_image');
			if( $BOTTOM6IMAGE ) {
				$url = $BOTTOM6IMAGE['url'];
				$title = $BOTTOM6IMAGE['title'];
				$alt = $BOTTOM6IMAGE['alt'];
				$caption = $BOTTOM6IMAGE['caption'];

				// thumbnail
				$size = 'large';
				$thumb = $BOTTOM6IMAGE['sizes'][ $size ];
			}
			?>

<img class="bottomimages" src="<?php echo $thumb ?>" alt="<?php echo $alt ?>" />

		   
		<p class="bottom6desc" ><?php echo $BOTTOM6TITLE; ?></p>
		       
		   </div>

		   <?php
		    endwhile;
		else :
		    // no rows found
		endif;
		?>

	</div>
</div>
<!------------BOTTOM 6 LOOPER----------->














<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer();?>