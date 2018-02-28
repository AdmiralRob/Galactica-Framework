<?php //Template Name: No Sidebars ?>

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
    <div class="page-row row">
        <div class="page-content column" >
            <?php the_content(); ?>

            <?php endwhile; endif; ?> 
        </div>    
    </div>    
</div>    


<?php get_footer(); ?>