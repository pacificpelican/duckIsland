<?php
/**
 * The template for displaying all single posts.
 *
 * @package Green Lake
 */

get_header(); ?>

<div class="small-12 medium-8 large-8 columns" id="bigcontentcol">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- #bigcontentcol -->


 <div class="small-12 medium-4 large-4 columns" id="sidebarcontentcol">


<?php get_sidebar(); ?>

</div><!-- #sidebarcontentcol -->

<?php get_footer(); ?>
