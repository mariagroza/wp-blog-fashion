<div class="footer">
	<div class="footer-content">
		<?php get_template_part('template-parts/logo'); ?>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'top-menu',
			)
		);?>
		<?php get_template_part('template-parts/social-media-icons' ); ?>
		<div class="footer-year">@2019 Logwork. All Right Reserved.</div>
	</div>
</div>

<?php wp_footer();
?>
</body>
</html>
