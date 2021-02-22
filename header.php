<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Fashion Blog Template</title>

	<?php 
	wp_head();
	?>

</head>

<body>

	<header class="header"> 
		<?php get_template_part( 'template-parts/logo'); ?>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'top-menu',
			)
		);?>
	</header>
