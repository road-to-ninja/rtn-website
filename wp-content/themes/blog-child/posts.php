<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<ul>
		test
		<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		
		<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
		
		<li><?php the_excerpt(__('(more…)')); ?></li>
		<?php 
		endwhile;
		wp_reset_postdata();
		?>
		</ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();