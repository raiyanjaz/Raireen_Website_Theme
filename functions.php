<?php 

function raireen_files() {
    wp_enqueue_style('raireen_main_files', get_stylesheet_uri());
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Inter');
}

add_action('wp_enqueue_scripts', 'raireen_files');

function post_types() {
    register_post_type('courses', array(
        'public' => true,
        'labels' => array(
            'name' => 'Courses',
            'add_new_item' => 'Add New Course',
            'edit_item' => 'Edit Course',
            'all_items' => 'All Courses',
            'singular_name' => 'Event'
        ),
        'description' => 'Add or Remove Available Courses',
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}

add_action('init', 'post_types');

?>