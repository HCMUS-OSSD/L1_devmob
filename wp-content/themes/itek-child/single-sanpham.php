<?php
/**
 * The Template for displaying all single posts.
 *
 * @package iTek
 */

get_header(); ?>

<div class="container">
	<div class="row" role="main">
        <div class="span1"></div>
        <div class="span10">
        <?php do_action( 'itek_before_single' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single-sanpham' ); ?>

			<?php itek_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>
        <?php do_action( 'itek_after_single' ); ?>
		</div>
        <div class="span1"></div>
		
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>