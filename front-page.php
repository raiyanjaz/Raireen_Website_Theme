<?php get_header(); ?>

<div class="home-page-container">
    <div class="landing-container">
        <div class="welcome-text-box">
            <div class="welcome-text"><span>Welcome!</span></div>
            <div class="mission-text"><span><?php echo get_option('blogdescription'); ?></span></div>
            <div class="text">
                <p> To learn more about us and our mission, click below: </p>
            </div>
            <div class="get-started-button">
                <div class="get-started-button2">
                    <a href="<?php echo site_url('/register'); ?>">Get Started -></a>
                </div>
            </div>
        </div>
        <img src="<?php echo get_theme_file_uri('torontoSkyline.jpg')?>">
    </div>

    <div class="service-container">
        <div class="service-intro">
            <span>Find courses that match your needs</span>
        </div>
        <div class="service-description">
            <p>We offer multiple courses for students that range from highschool to post-graduates. Below are some
                currently available courses: </p>
        </div>
        <div class="service-banner">
            <?php 
                // Class will access info from the database automatically
                $homepageCourses = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'courses'
                )); 

                while ($homepageCourses->have_posts()) {
                    $homepageCourses->the_post(); ?>

            <div class="course-display">
                <img src="<?php ?>">
                <div class="course-title"><span><?php the_title(); ?></span></div>
                <div class="course-desc"><span></span> <?php echo wp_trim_words(get_the_content(), 19); ?></div>
                <div class="course-btn"><a href="<?php permalink_link()?>">See More -></a></div>
            </div>
            <?php
            }
            ?>










        </div>
    </div>

</div>

<?php get_footer(); ?>