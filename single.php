<?php get_header(); ?>

<div class="subpage">
    <div class="fronthero">
    </div>           
    
    
    <div class="page-wrap">
        <div class="page-row row" data-equalizer>
            <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
            <div class="page-content large-9 medium-8 column" id="post-content" data-equalizer-watch>
                <h3 class="post-date"> <?php the_time(get_option('date_format')) ?></h3>
                <div class="the-post">
                   <div class="post-featured-img">

                        <?php 
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail('featured');
                        }            
                        ?>
                    </div>   
                    <div class="content">

                        <div class="blog-content">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        </br>
                            <?php the_content(); ?>
                        </div>

                        <?php endwhile; endif; ?>
                    </div>  
                </div>
             </div>
            
        <div class="side-bar large-3 medium-4 column" data-equalizer-watch>
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>
 

    
<?php get_footer(); ?>