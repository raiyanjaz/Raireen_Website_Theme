<?php get_header(); 

while (have_posts()) {
    the_post();
} ?>

<div class="page-body">
    <div class="page-header">
        <div class="page-title">
            <span><?php the_title(); ?></span>
        </div>
        <img src="">
    </div>
    <div class="page-content">
        <span><?php the_content(); ?></span>
    </div>
    <div class="register-btn">
        <a href="">Register -></a>
    </div>
</div>

<?php get_footer(); ?>