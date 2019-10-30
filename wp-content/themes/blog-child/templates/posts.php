<?php

/**
 * Template Name: Posts Page
 *
 * @package blog-child theme
 */


get_header();
?>

<div id="primary" class="content-area">
     <main id="main" class="site-main">
          posts

          <div>
               <?php $the_query = new WP_Query('posts_per_page=5'); ?>

               <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    
                    <div class="post-card">
                         <span>
                              <?php echo the_date() ?>
                         </span>
                         <span>
                              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                         </span>
                         <div class="post-content">
                              <?php
                                   echo wp_trim_words(get_the_content(), 10);
                                   ?>
                         </div>
                    </div>
               <?php
               endwhile;
               wp_reset_postdata();
               ?>
          </div>

     </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
