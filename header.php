<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png"> 

    <?php wp_head(); ?>

</head> 


<body>
	<nav class="navbar en-navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		

			<?php
				wp_nav_menu( array(
					'theme' => 'primary',
					'theme_location' => 'primary',
					'container' => ' ',
					'menu_class' => 'navbar-nav mr-auto en-list-wrapper',
					'items_wrap' => '<ul class="%2$s">%3$s</ul>'
				) );
			?>
			
			<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
		</nav>

	    <header class="theme-bg-dark text-center py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>
