<?php 

function raireen_files() {
    wp_enqueue_style('raireen_main_files', get_stylesheet_uri());
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Inter');
}

add_action('wp_enqueue_scripts', 'raireen_files');

?>