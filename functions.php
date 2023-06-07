<?php 

function raireen_files() {
    wp_enqueue_style('raireen_main_files', get_stylesheet_uri());
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Inter');
    wp_enqueue_style( 'raireen-css', get_template_directory_uri() . '/css/service-page.css', array(), '1.0', 'all' );
    wp_enqueue_script('raireen-js', get_template_directory_uri() . '/raireen-script.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'raireen_files');

function theme_features() {
    // Adds the title of the page on the tab
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_post_type_support( 'forum', 'thumbnail' );
}

add_action('after_setup_theme', 'theme_features');

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
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
    register_post_type('study tours', array(
        'public' => true,
        'labels' => array(
            'name' => 'Study Tours',
            'add_new_item' => 'Add New Study Tour',
            'edit_item' => 'Edit Study Tour',
            'all_items' => 'All Study Tours',
            'singular_name' => 'Study Tour'
        ),
        'description' => 'Add or Remove Available Tours',
        'menu_icon' => 'dashicons-airplane',
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'post_types');

// Custom REST API Integration to access courses data and dynamically populate the course pop up in services
function custom_course_api_route() {
    register_rest_route('custom/v1', '/courses/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_course_data',
    ));
}
add_action('rest_api_init', 'custom_course_api_route');

function get_course_data($request) {
    $course_id = $request->get_param('id');
    $course = get_post($course_id);

    if (!$course || $course->post_type !== 'courses') {
        return new WP_Error('invalid_course_id', 'Invalid course ID', array('status' => 404));
    }

    $course_data = array(
        'thumbnail' => get_the_post_thumbnail_url($course->id),
        'title' => $course->post_title,
        'content' => $course->post_content,
        // Add more fields as needed
    );

    return rest_ensure_response($course_data);
}

?>