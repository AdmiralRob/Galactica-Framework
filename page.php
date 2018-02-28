<?php get_header(); ?>

<div class="content-wrap">
    <div class="page-hero" id="index-hero">
<!--        <?php 
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail('featured');
        }             
        ?>
-->
        <div class="title-row row">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
        </div>
    </div>
</div>
<div class="page-wrap">
    <div class="page-row row" data-equalizer>
        <div class="page-content large-9 medium-8 column" data-equalizer-watch>
            <?php the_content(); ?>

            <?php endwhile; endif; ?> 
        </div>    
        <div class="side-bar large-3 medium-4 column" data-equalizer-watch>
            <?php get_sidebar(); ?>
        </div>
    </div>    
</div>    


<?php get_footer(); ?>