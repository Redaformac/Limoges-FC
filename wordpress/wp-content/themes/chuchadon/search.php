<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Chuchadon
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/**
				* Run the loop for the search to output the results.
				* If you want to overload this in a child theme then include a file
				* called content-search.php and that will be used instead.
				*/
				get_template_part( 'template-parts/content', 'search' );
			?>

		<?php endwhile; ?>

		<?php
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'chuchadon' ),
				'next_text'          => __( 'Next page', 'chuchadon' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'chuchadon' ) . ' </span>',
			) );
		?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>
