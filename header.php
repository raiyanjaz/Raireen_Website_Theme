<!DOCTYPE html>
<html>

<head>
    <!-- Accesses the header file -->
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
</head>

<body <?php body_class();?>>
    <header class="main-header">
        <div class="header-left">
            <img src="<?php echo get_theme_file_uri('/images/raireenLogo.jpg')?>">
            <div class="header-text">
                <a href="<?php echo site_url(); ?>"> Raireen Learning Centre </a>
            </div>
        </div>
        <div class=header-options>
            <div class=option-aboutus><a href="<?php echo site_url('/about-us'); ?>">About Us</a></div>
            <div class=option-services><a href="<?php echo site_url('/services'); ?>">Services</a></div>
            <div class=option-contact><a href="<?php echo site_url('/contact'); ?>">Contact</a></div>
            <div class="option-register-button">
                <a href="<?php echo site_url('/register'); ?>">Register</a>
            </div>
        </div>
    </header>