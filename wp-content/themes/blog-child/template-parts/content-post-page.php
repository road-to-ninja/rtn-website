<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

?>
<?php blog_post_thumbnail(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				blog_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<div class="category-container-post">
                              <span class="category-icon">
                              <i class="fas fa-tags"></i>
                              </span>
                              
                              <?php foreach (get_the_category() as $category ): ?> 
                              <span class="post-category">
                                   <a class="category-link" href="<?php echo get_category_link($category)?>"><?php echo $category->name; ?></a>
                              </span>
                              <?php endforeach; ?>
                         </div>
                         
                         <div class="tags-container">
                         <?php
                              $tags = get_the_tags();
                              if ($tags !== false):
                                   foreach ( get_the_tags() as $tag ):
                         ?> 
                                   <span class="post-tags">
                                        <?php
                                             echo $tag->name
                                        ?>
                                   </span>
                                   <?php endforeach; ?>
                              <?php endif; ?>
                         </div>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
		echo get_the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blog' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
