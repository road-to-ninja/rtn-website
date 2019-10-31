<?php

/**
 * Template Name: Posts Page
 *
 * @package blog-child theme
 */


get_header();
?>

<div class="page-container">
         <div class="posts-filter">
              <?php get_search_form() ?>
         </div>

          <div class="posts-container">
               <?php $the_query = new WP_Query('posts_per_page=5'); ?>

               <?php while ($the_query->have_posts()) : 
                    
                    $the_query->the_post(); ?>
                    
                    <div class="post-card">
                         <span class="post-title">
                              <a href="<?php the_permalink() ?>"><?php echo ucfirst(get_the_title()); ?></a>
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
                    </div>
               <?php
               endwhile;
               wp_reset_postdata();
               ?>
          </div>
</div><!-- #primary -->

<?php
get_footer();
