<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package iTek
 */

get_header(); ?>

<div class="container">
	<div class="row" role="main">
        <div class="span1"></div>
        <div class="span10">
        <?php do_action( 'itek_before_page' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>
        <?php do_action( 'itek_after_page' ); ?>
		</div>
        <div class="span1"></div>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
