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

        </div>
    </div>

</div>

<?php get_footer(); ?>