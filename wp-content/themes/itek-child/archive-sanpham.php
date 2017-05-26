<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package iTek
 */

get_header(); ?>

<div class="container">
	<div class="row" role="main">
        <div class="span1"></div>
        <div class="span10">

		<?php if ( have_posts() ) : ?>



			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'archive-sanpham2' );
				?>

			<?php endwhile; ?>

			<?php itek_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

		</div>
        <div class="span1"></div>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>