<?php get_header(); ?>

<div class="front-page content-wrap">
    <div id="hero1-bar">
        <div class="row">
            <?php 
              // check if the post has a Post Thumbnail assigned to it.
              if ( has_post_thumbnail() ) {
                // the_post_thumbnail('featured');
              }             
            ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!--            <h1 class="page-title" itemprop="headline"><?php //the_title(); ?></h1>-->

			<p>This ain't no frontpage!</p>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>    
    </div>
</div>  


<?php get_footer(); ?> 
