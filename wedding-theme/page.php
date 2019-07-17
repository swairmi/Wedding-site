<?php
/*
Template Name:thisisservices
*/
?>
<?php get_header();?>



<div class="container">
	<div class="firsttitle">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		
		<p class="supportingtext" ><?php the_content(); ?></p>

<?php endwhile; else : ?>
	<p><?php _e( 'sorry mate nothings here. no pages, git gud' ); ?></p>
<?php endif; ?>

	</div>
</div>




<!------------TOP TRIO LOOPER----------->
<div class="container">

	<?php
if(get_field('the_main_top_title'))
{echo '<h1 style="color:#99ccff; font-size:35px; text-align:center; margin-bottom:40px;">' . get_field('the_main_top_title') . '</h1>';}?>

	<div class="row">

		<?php
			if( have_rows('top_of_services_repeater') ):
		    while ( have_rows('top_of_services_repeater') ) : the_row();

			$TOPTITLE = get_sub_field( 'top_title' );
			$TOPIMAGES = get_sub_field( 'top_images' );
			$TOPDESC = get_sub_field( 'top_desc' );
		?>


<div class="col-md-4">

	<?php 
		$TOPIMAGES = get_sub_field('top_images');
		if( $TOPIMAGES ){
		$url = $TOPIMAGES['url'];
		$title = $TOPIMAGES['title'];
		$alt = $TOPIMAGES['alt'];
		$caption = $TOPIMAGES['caption'];
		$size = 'large';
		$thumb = $TOPIMAGES['sizes'][ $size ];}
	?>
		<img class="topofservice" src="<?php echo $thumb ?>" alt="<?php echo $alt ?>" />

		   <h2 class="toppertriotitle"><?php echo $TOPTITLE; ?></h2>
		
		    <p class="toppertriodesc" ><?php echo $TOPDESC; ?></p>
</div>

		 <?php
			endwhile;
			else :
			endif;
		?>
	</div>
</div>
<!------------TOP TRIO LOOPER----------->



<!------------LARGE IMAGE AND TEXT---------->
<div class="container">

	<?php
if(get_field('large_image_main_title'))
{
	echo '<p style="text-align:center; color:#99ccff; margin-top:30px; margin-bottom:30px; font-size:35px;">' . get_field('large_image_main_title') . '</p>';
}

?>

	<div class="row">

		<?php
			if( have_rows('large_image_repeater') ):
		    while ( have_rows('large_image_repeater') ) : the_row();

			$IMAGETITLE = get_sub_field( 'image_title' );
			$LARGEIMAGE = get_sub_field( 'large_image' );
			$IMAGEDESC = get_sub_field( 'image_desc' );
		?>



<div class="col-md-6">
		<?php 
		$LARGEIMAGE = get_sub_field('large_image');
		if( $LARGEIMAGE ){
		$url = $LARGEIMAGE['url'];
		$title = $LARGEIMAGE['title'];
		$alt = $LARGEIMAGE['alt'];
		$caption = $LARGEIMAGE['caption'];
		$size = 'large';
		$thumb = $LARGEIMAGE['sizes'][ $size ];}
	?>
		<img class="" src="<?php echo $thumb ?>" alt="<?php echo $alt ?>" />
</div>


	<div class="col-md-6">

<h2 class="coveragetitle"><?php echo $IMAGETITLE; ?></h2>
		   
		    <p class="coveragedesc" ><?php echo $IMAGEDESC; ?></p>
</div>

		 <?php
			endwhile;
			else :
			endif;
		?>
	</div>
</div>
<!------------LARGE IMAGE AND TEXT---------->






<!------------FLOWER BANNER------------------>
<?php	
// Image field with a return value of Image Array
$FLOWERBANNERBACKING = get_field('flower_banner_backing');
echo '<div class="panel"';
if ( $FLOWERBANNERBACKING ) {
    $size = 'large';
    $large_bg_url = $FLOWERBANNERBACKING['sizes'][ $size ];
    echo ' style="background-image: url(' . $large_bg_url . '); width:100%; height:350px; padding-top:60px; padding-bottom:60px; margin-top:50px; background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; "';
}
echo '>' . PHP_EOL;
?>




<div class="container" id="flowerbannerdude">

<?php
			if( have_rows('flower_banner_repeater') ):
		    while ( have_rows('flower_banner_repeater') ) : the_row();

			$FLOWERBANNERFIRSTTITLE = get_sub_field( 'flower_banner_first_Title' );
			$FLOWERBANNER2NDTITLE = get_sub_field( 'flower_banner_2nd_title' );
			$FLOWERBANNERBUTTON = get_sub_field( 'flower_banner_button' );
			$BUTTONTEXT = get_sub_field( 'button_text' )
		?>








	<p class="titleofbottrio"><?php echo $FLOWERBANNERFIRSTTITLE; ?></p>
	<p class="subtitleofbottrio"><?php echo $FLOWERBANNER2NDTITLE; ?></p>
	<a href="http://localhost:8888/weddingsite.dev/contact/" class="bottriobutton"><button><?php echo $BUTTONTEXT;?></button></a>

		 <?php
			endwhile;
			else :
			endif;
		?>
	</div>
</div>
<!------------FLOWER BANNER------------------>






<!------------BOTTOM TRIO------------------>
<div class="container">

	<?php
		if(get_field('guide_for_couples_title')){
		echo '<H4 style="text-align:center; color:#99ccff; margin-top:50px; ">' . get_field('guide_for_couples_title') . '</H4>';}?>
	<?php
		if(get_field('guide_for_couples_desc')){
		echo '<p style="text-align:center; color:grey; margin-bottom:50px;">' . get_field('guide_for_couples_desc') . '</p>';}?>

<div class="row">
		<?php
			if( have_rows('guide_for_couples_repeater') ):
		    while ( have_rows('guide_for_couples_repeater') ) : the_row();

			$COUPLESTITLE = get_sub_field( 'couples_title' );
			$COUPLESDESC = get_sub_field( 'couples_desc' );
			$COUPLESIMAGES = get_sub_field( 'couples_images' );
		?>
<div class="col-md-6" id="picturebott">
	<?php 
		$COUPLESIMAGES = get_sub_field('couples_images');
		if( $COUPLESIMAGES ){
		$url = $COUPLESIMAGES['url'];
		$title = $COUPLESIMAGES['title'];
		$alt = $COUPLESIMAGES['alt'];
		$caption = $COUPLESIMAGES['caption'];
		$size = 'large';
		$thumb = $COUPLESIMAGES['sizes'][ $size ];}
	?>
		<img class="bottomimages" src="<?php echo $thumb ?>" alt="<?php echo $alt ?>" />
</div>



<div class="col-md-6" id="picturebott">
	<H4 class="bottomtitles"><?php echo $COUPLESTITLE; ?></H4>
	<P class="bottomdesc"><?php echo $COUPLESDESC; ?></P>
</div>

		 <?php
			endwhile;
			else :
			endif;
		?>
	</div>
</div>
<!------------BOTTOM TRIO------------------>







<?php get_footer();?>