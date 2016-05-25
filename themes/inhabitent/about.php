<?php
/**
 * The template for displaying the About page.
 *
 * @package RED_Starter_Theme
 * Template Name: About Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="about-header">
        <h1>About</h1>
      </section>
			<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        	<div class="about-content container">
        		<?php the_content(); ?>


              <h2 class="about-subtitle">
                <?php $story = CFS()->get_field_info( 'our_story' );
                      echo $story['label']; ?>
              </h2>

              <p>
                <?php echo CFS()->get( 'our_story' ); ?>
              </p>

              <h2 class="about-subtitle">
                <?php $team = CFS()->get_field_info( 'our_team' );
                      echo $team['label']; ?>
              </h2>

              <p>
                <?php echo CFS()->get('our_team'); ?>
              </p>


        	</div><!-- .entry-content -->
        </article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
