<?php
/**
 * The template for displaying the front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main about" role="main">

			<section class="header-hero">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="" />
	    </section>

			<section class="product-posts">
				<h2>Shop Stuff</h2>

				<div class="container">

					<?php $product_types = get_terms('product_type' );
					?>

					<?php foreach( $product_types as $product_type) : ?>

						<div class="product-type">
							<img src='<?php echo get_stylesheet_directory_uri(); ?>/images/product-type-icons/<?php echo $product_type->slug; ?>.svg' alt='' />

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
							<a href="<?php the_permalink(); ?>" class="read-more">Read Entry</a>
			 		</div>

				 </div>
		 	 <?php endforeach; wp_reset_postdata(); ?>
			 </div>
			</section>



			<section class="adventure-posts">
				<div class="container">

				<?php
			   $args = array( 'post_type' => 'adventure',
				 								'order' => 'ASC',
											 	'posts_per_page' => 4);
			   $adventure_posts = get_posts( $args ); // returns an array of posts
			 ?>
			 <!-- set a counter variable, to display the first post differently -->
			 <?php $count = 0; ?>
			 <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
				 <?php if ($count === 0): ?>
					 <div class="outer left">
						 <div class="inner">
							 <div class="adventure-image">
								 <?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'full' ); ?>
								<?php endif; ?>
							 </div>


							 <div class="adventure-info">
								 <h3 class="adventure-entry"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
 								<a href="<?php the_permalink(); ?>" class="button transparent">Read More</a>
							 </div>


						</div>
					 </div> <!-- end outer left (largest square adventure post)-->
					 <div class="outer right">

					 <?php else: ?>
						 <div class="inner">

							 <div class="adventure-image">
								 <?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'full' ); ?>
								<?php endif; ?>
							 </div>

							 <div class="adventure-info">
								<h3 class="adventure-entry"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
								 <a href="<?php the_permalink(); ?>" class="button transparent">Read More</a>
							</div>

						</div>

				 <?php endif; ?>
				 <?php $count++; ?>
			 <?php endforeach; wp_reset_postdata();?>

		 			</div> <!-- end outer right (3 smaller adventure posts) -->
				</div> <!-- end container -->

				<a href="<?php echo get_post_type_archive_link('adventure'); ?>" class="button-reverse">More Adventures</a>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
