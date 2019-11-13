<?php

/**
 * Template Name: Posts Page
 *
 * @package blog-child theme
 */


get_header();
?>

<div class="page-container">
          <div class="author">
              <img class="author-profil" src=""alt="">
              <p class="description-site">
                   <i class="description-site-content">
                   Hi, this blog has the purpose to share with you information about IT. Feel free to comment posts if you have any suggestion, bugs, etc... , that way you will help other readers and also me. Good reading 😁!
                    </i>
               </p>
              <p class="author-links">
                   <a class="link-sources" href="//github.com/blade-sensei" target="_blank" rel="noopener noreferrer">
                         <img class="link-icons" src="<?php bloginfo('template_url')?>/images/github.png"
                         alt="github"
                         sizes="(max-width: 32px) 100vw, 32px"
                         width="32">
                   </a>
                   
                   <a class="link-sources"  href="//linkedin.com/in/juan-carlos-coyla-30b9b4109/" target="_blank" rel="noopener noreferrer">
                         <img class="link-icons" src="<?php bloginfo('template_url')?>/images/linkedin.png"
                         alt="linkedin"
                         sizes="(max-width: 32px) 100vw, 32px"
                         width="32">
                   </a>
                   <a class="link-sources" href="//www.npmjs.com/~blade-sensei" target="_blank" rel="noopener noreferrer">
                         <img class="link-icons" src="<?php bloginfo('template_url')?>/images/npm.jpg"
                         alt="npm"
                         sizes="(max-width: 32px) 100vw, 32px"
                         width="32">
                   </a>
                   <a class="link-sources" href="//www.codewars.com/users/blade-sensei" target="_blank" rel="noopener noreferrer">
                         <img class="link-icons" src="<?php bloginfo('template_url')?>/images/codewar.png"
                         alt="codewar"
                         sizes="(max-width: 32px) 100vw, 32px"
                         width="32">
                   </a>
              </p>
          </div>

         <div class="posts-filter">
              <?php get_search_form() ?>
         </div>

          <div class="posts-container">
               <?php $the_query = new WP_Query('posts_per_page=5'); ?>

               <?php while ($the_query->have_posts()) : 
                    
                    $the_query->the_post(); ?>
                    
                    <div class="post-card" onclick="redirectToPostPage('<?php the_permalink(); ?>')">
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
<?php wp_footer(); ?>
