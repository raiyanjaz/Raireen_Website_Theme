<?php get_header(); ?>

<div class="home-page-container">
    <div class="landing-container">
        <div class="welcome-text-box">
            <span>Welcome!</span>
            <h2>Our goal is to help students in achieving their goals.</h2>
            <div class="get-started-button">
                <div class="get-started-button2">
                    <a href="<?php echo site_url('/register'); ?>">Get Started</a>
                </div>
            </div>
        </div>
        <img src="<?php echo get_theme_file_uri('torontoSkyline.jpg')?>">
    </div>
    <div class="service-container">

    </div>
</div>

<?php get_footer(); ?>