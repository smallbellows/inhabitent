<?php
/**
 * The template for displaying the front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main about" role="main">

			<section class="header-hero">
	      <img src="<?php echo bloginfo('url') ?>/htdocs/wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg" alt="" />
	    </section>

			<section class="product-posts">
				<h2>Shop Stuff</h2>

				<div class="container">

					<?php $product_types = get_terms('product_type' );
					?>

					<?php foreach( $product_types as $product_type) : ?>

						<div class="product-type">
							<?php echo "<img src='"
										. get_stylesheet_directory_uri()
										. "/images/product-type-icons/"
							 			. $product_type->slug
										. ".svg' alt='' />";
							?>
							<p>
								<?php echo $product_type->description; ?>
							</p>

							<a class="button-reverse" href="<?php echo get_term_link($product_type, 'product-type'); ?>">
								<?php echo $product_type->name; ?> &nbsp;Stuff
							</a>

						</div>

					<?php endforeach; ?>

			 </div> <!-- end product post container -->
			</section>


			<section class="journal">
				<h2>Inhabitent Journal</h2>
				<div class="container">


				<?php
			   $args = array( 'post_type' => 'post',
											 	'posts_per_page' => 3);
			   $journal_posts = get_posts( $args ); // returns an array of posts
			 ?>

			 <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
				 <div class="journal-post">

					 <div class="journal-img-wrapper">
						 <?php if ( has_post_thumbnail() ) : ?>
							 <?php the_post_thumbnail( 'large' ); ?>
						 <?php endif; ?>
				 	</div>
					<div class="post-data">
			 				<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>

							<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			 		</div>

				 </div>
		 	 <?php endforeach; wp_reset_postdata(); ?>
			 </div>
			</section>

			<section class="adventure-posts">
					<h2>Latest Adventures</h2>
				<div class="container">
				<?php $background_overlay="linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4))" ?>

				<div class="outer left">
					<div class="inner">
						<div class="img" style="background: <?php echo $background_overlay; ?>, url(<?php echo bloginfo('url') ?>/htdocs/wp-content/themes/inhabitent/images/adventure-photos/canoe-girl.jpg) no-repeat 50% 50%; background-size: cover;">
							<h3>Getting Back to Nature in a Canoe</h3>
							<p class="read-more-white">Read More</p>
						</div>
					</div>
				</div>
					<div class="outer right">
						<div class="inner">
							<div class="img" style="background:  <?php echo $background_overlay; ?>, url(<?php echo bloginfo('url') ?>/htdocs/wp-content/themes/inhabitent/images/adventure-photos/beach-bonfire.jpg) no-repeat 50% 50%; background-size: cover;">
								<h3>A Night with Friends at the Beach</h3>
								<p class="read-more-white">Read More</p>
							</div>
						</div>

						<div class="inner">
							<div class="img" style="background:  <?php echo $background_overlay; ?>, url(<?php echo bloginfo('url') ?>/htdocs/wp-content/themes/inhabitent/images/adventure-photos/mountain-hikers.jpg) no-repeat 50% 50%; background-size: cover;">
								<h3>Taking in the View at Big Mountain</h3>
								<p class="read-more-white">Read More</p>
							</div>
						</div>

						<div class="inner">
							<div class="img" style="background:  <?php echo $background_overlay; ?>, url(<?php echo bloginfo('url') ?>/htdocs/wp-content/themes/inhabitent/images/adventure-photos/night-sky.jpg) no-repeat 50% 50%; background-size: cover;">
								<h3>Star-Gazing at the Night Sky</h3>
								<p class="read-more-white">Read More</p>
							</div>
						</div>
					</div>

				</div>

					<a href="#" class="button-reverse">More Adventures</a>
			</section>  <!-- .adventure-posts -->

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
