<?php
/**
 * The template for displaying archive of Adventure Custom Post Type.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="cpt-archive-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>

			</header><!-- .page-header -->
				<div class="cpt-grid adventure-grid">
    			<?php /* Start the Loop */ ?>
    			<?php while ( have_posts() ) : the_post(); ?>

  					<div class="adventure-post">

              <div class="adventure-wrapper">
                <a href="<?php the_permalink(); ?>">
    							<?php if ( has_post_thumbnail() ) : ?>
    								<?php the_post_thumbnail( 'large' ); ?>
    							<?php endif; ?>
                </a>
    						  <div class="adventure-info">
      							<?php the_title( sprintf( '<h2 class="adventure-name"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                    <a href="<?php the_permalink(); ?>" class="button transparent">Read More</a>
  						    </div>

              </div> <!-- end adventure-wrapper -->

  					</div><!-- end adventure-post -->

			    <?php endwhile; ?>
      </div> <!-- end adventure-grid -->


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
