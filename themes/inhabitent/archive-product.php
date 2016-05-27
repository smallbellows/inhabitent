<?php
/**
 * The template for displaying archive of Product Custom Post Type.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="cpt-archive-header">
				<h1>Shop Stuff</h1>

				<?php $product_types = get_terms(
					array( 'taxonomy' => 'product_type' ) );
				?>
				<ul>


				<?php foreach( $product_types as $product_type) : ?>
					<li>
							<a href="<?php echo get_term_link($product_type, 'product-type'); ?>">
								<?php echo $product_type->name; ?>
							</a>
					</li>
				<?php endforeach; ?>
				</ul>
			</header><!-- .page-header -->
				<div class="cpt-grid">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>



					<div class="product-item">
						<div class="product-image">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
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
