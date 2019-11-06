<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

?>
<article class="post-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?> onclick="redirectToPostPage('<?php the_permalink(); ?>')">
                         <span class="post-title">
                              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                         </span>
                         <span class="post-date">
                              <?php echo the_date() ?>
                         </span>
                        
                         <div class="category-container">
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
                
</article><!-- #post-<?php the_ID(); ?> -->
