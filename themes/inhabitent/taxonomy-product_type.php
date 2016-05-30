<?php
/**
 * The template for displaying archive of Product Custom Post Types.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="cpt-archive-header">
				<h1 class="page-title"><?php single_term_title(); ?> </h1>
        <?php echo term_description() ?>
			</header><!-- .page-header -->
				<div class="cpt-grid">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

					<div class="product-item">
						<div class="product-image">
              <a href=<?php the_permalink(); ?>>
  							<?php if ( has_post_thumbnail() ) : ?>
  								<?php the_post_thumbnail( 'large' ); ?>
  							<?php endif; ?>
              </a>
						</div>
						<div class="product-meta">
							<?php the_title( sprintf( '<h2 class="product-name"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
						</div>
					</div>


			<?php endwhile; ?>
</div>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
