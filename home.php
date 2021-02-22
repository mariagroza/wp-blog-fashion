<?php get_header(); ?>

<?php get_template_part('template-parts/posts/xl') ?>

<main class="home">

	<div class="home-posts-container">
		<?php get_template_part('template-parts/posts/l-m') ?>
	</div>
	<div class="sidebar">
		<?php get_template_part('template-parts/posts/xs') ?>
		<?php get_template_part('template-parts/sidebar/categories') ?>
		<?php get_template_part('template-parts/sidebar/social-media-sidebar') ?>
		<?php get_template_part('template-parts/sidebar/tags') ?>
	</div>

</main>
<?php get_template_part('template-parts/posts/s') ?>
</main>

<?php get_footer(); ?>
