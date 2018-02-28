<?php get_header(); ?>
<div class="subpage">
    <div class="fronthero">
       <?php 
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail('featured');
        }             
        ?>

    </div>  
 	
    <div class="navigation-links">test: <?php wp_link_pages(); ?></div>
    
    <div class="page-wrap">
        <div class="page-row row" data-equalizer>
                            <div class="title-row row">
                    <?php if (is_category()) { ?>

                        <h1 class="page-title">
                            <span><?php _e(); ?></span> <?php single_cat_title(); ?>
                        </h1>

                    <?php } elseif (is_tag()) { ?> 

                        <h1 class="page-title">
                            <span><?php _e('Posts Tagged:'); ?></span> <?php single_tag_title(); ?>
                        </h1>

                    <?php } elseif (is_author()) { ?>

                        <h1 class="page-title">
                            <span><?php _e('Posts By:'); ?></span> <?php get_the_author_meta('display_name'); ?>
                        </h1>

                    <?php } elseif (is_day()) { ?>

                        <h1 class="page-title">
                            <span><?php _e('Daily Archives:'); ?></span> <?php the_time('l, F j, Y'); ?>
                        </h1>

                    <?php } elseif (is_month()) { ?>

                        <h1 class="page-title">
                            <span><?php _e('Monthly Archives:'); ?>:</span> <?php the_time('F Y'); ?>
                        </h1>

                    <?php } elseif (is_year()) { ?>

                        <h1 class="page-title">
                            <span><?php _e('Yearly Archives:'); ?>:</span> <?php the_time('Y'); ?>
                        </h1>

                    <?php } else { ?>

                        <h1 class="page-title">Presenting: Our Blog</h1>

                    <?php } ?>


                </div> 
            <div class="page-content medium-9 column" data-equalizer-watch>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post-date"><h5> <?php the_time(get_option('date_format')) ?></h5></div>
                 <div class="entry">
                     <div class="post-thumbnail"><?php the_post_thumbnail('blog-thumbnail');?></div>
                     <div class="post-content"> 
                        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
                         <div class="post-text">
                             <?php the_excerpt(); ?>
                         </div>     
                    </div>      
                </div>

                    <?php endwhile; ?>

                <div class="page-navi">

                    <ul class="nav-links">

                        <li class="next-link alignleft"><?php next_posts_link(__('< Older Entries')) ?></li>
                        <li class="prev-link alignright"><?php previous_posts_link(__('Newer Entries >')) ?></li>

                    </ul>

                </div>	


            <?php 
                // not found (invalid post/page id, not at 404)
            else : ?>


                <div class="post">

                    <h2>Not Found</h2>
                    <p>Sorry, but the requested resource was not found on this site.</p>

                </div>
                        <?php endif; ?>
            </div>   


            <div class="side-bar medium-3 column" data-equalizer-watch>
                <?php get_sidebar(); // Sidebar One will Render ?>
            </div>	
        </div>
    </div>    
</div>
    
<?php get_footer(); ?>