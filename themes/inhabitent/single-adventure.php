<?php
/**
 * The template for displaying all single adventure posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="adventure-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'full' ); ?>
					<?php endif; ?>
				</div>

				<div class="adventure-container">
					<?php the_title( '<h1 class="adventure-title">', '</h1>' ); ?>
          <div class="entry-meta">
            <?php red_starter_posted_by(); ?>
          </div>
					<div class="entry-content">
						<h3 class="price"><?php echo CFS()->get( 'price' ); ?></h3>
	      		<?php the_content(); ?>

	      	</div><!-- .entry-content -->

					<div class="social-buttons">
						<a href="#" class="social-button"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
						<a href="#" class="social-button"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
						<a href="#" class="social-button"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
					</div>
				</div>

      </article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
