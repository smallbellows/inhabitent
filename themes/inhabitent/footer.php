<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">
					<div class="contact-info">
						<h3>Contact Info</h3>
						<p>
							<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
						</p>
						<p>
							<a href="#">778-456-7891</a>
						</p>
						<p>
							social media logos
						</p>
					</div>
					<div class="business-hours">
						<h3>Business Hours</h3>
						<p>
							<span class="days">Monday-Friday:</span> 9am to 5pm
						</p>
						<p>
							<span class="days">Saturday:</span> 10am to 2pm
						</p>
						<p>
							<span class="days">Sunday:</span> Closed
						</p>
					</div>
					<div class="logo">
						<img src="<?php echo home_url(); ?>/htdocs/wp-content/themes/inhabitent/images/logos/inhabitent-logo-text.svg" alt="" />
					</div>
				</div>
				<div class="site-info">
					<p>Copyright &copy; <?php echo date('Y'); ?> Inhabitent</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
