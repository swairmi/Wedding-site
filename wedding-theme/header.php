<!doctype html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<!---------------------------------------------------------------------->
<!--------------------------------https://www.yola.com/templates/#details/leavenworth-------------------------------------->
<!---------https://www.yola.com/templates/#details/leavenworth----------------------->
<header>




<!-------------NAV MENU------------------->
	<div class="container-fluid">
		<?php 
			$defaults = array(
			 'container' => 'id',
			 'container_class' => 'bannerofunder',
			 'theme_location' => 'primary-menu',
			 'menu_class' => 'no-bullet'
			);
			wp_nav_menu( $defaults );
		?>
	</div>
<!------------------------------------->



<!-----------------TITLE BANNER----------------->
<div class="container-fluid">
	<div class="firstbanner">
		<img id="title" src="http://localhost:8888/weddingsite.dev/wp-content/uploads/2018/12/thetitle-1.png">

		<img id="bannerofunder" src="http://localhost:8888/weddingsite.dev/wp-content/uploads/2018/12/underbanner-1.png">
	</div>
</div>
<!-----------------TITLE BANNER----------------->



</header>
