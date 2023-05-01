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
        <img src="<?php echo get_theme_file_uri('/images/torontoSkyline.jpg')?>">
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

    <?php
    $homepageTours = new WP_Query(array(
        'post_type' => 'study tours'
    ));

    while ($homepageTours->have_posts()) {
        $homepageTours->the_post(); ?>

    <div class="tours-container">
        <div class="tour-header"><span>Experience Canada's Rich Culture and Industries with
                <span><?php the_title(); ?></span> -
                Your Path to Success!</span></div>
        <div class="tour-desc"><span><?php echo wp_trim_words(get_the_content(), 44, ''); ?></span></div>
        <div class="tour-gallery1">
            <img class="img1" src="<?php ?>">
            <img class="img2" src="<?php ?>">
            <img class="img3" src="<?php ?>">
            <img class="img4" src="<?php ?>">
        </div>
        <div class="learn-more-btn">
            <a href="<?php the_permalink() ?>">Learn More -></a>
        </div>
    </div>
    <?php
    }
    ?>
</div>

<?php get_footer(); ?>