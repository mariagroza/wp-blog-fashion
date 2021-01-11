<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fashion Blog Template</title>

	 <?php 
	wp_head();
	?>

</head>

<body>

	<header> 
		<?php get_template_part( 'template-parts/logotext', 'logotext' ); ?>
		<?php get_template_part( 'template-parts/header/menu', 'menu' ); ?>
	</header>