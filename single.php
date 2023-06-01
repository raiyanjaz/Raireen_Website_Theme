<?php get_header(); 

while (have_posts()) {
    the_post();
} ?>

<div class="single-body">
    <div class="single-header">
        <div class="single-title">
            <span><?php the_title(); ?></span>
        </div>
        <img src="<?php 
        if (get_the_ID(the_post()) == 28)        
            echo get_theme_file_uri('images/canadaFlag.jpg'); ?>">
    </div>
    <div class="single-content">
        <span><?php the_content(); ?></span>
    </div>
    <div class=" register-btn">
        <a href="">Register -></a>
    </div>
</div>

<?php get_footer(); ?>