<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>

	</div>

	<footer id="footer" class="<?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		
		<?php get_template_part('footer-widget'); ?>

	</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>