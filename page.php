<?php get_header(); ?>

<div class="page-banner">
    <p><?php the_title(); ?></p>
</div>

<?php 
if (get_the_ID(the_post()) == 33) { // If on the service page
    $courses = new WP_Query(array(
        'post_type' => 'courses'
    ));          
    
    $counter = 0; // Initialize counter variable

    while ($courses->have_posts()) {
        $courses->the_post();
        
        if ($counter % 4 === 0) { // Create a new course container every fourth post
            if ($counter > 0) {
                echo '</div>'; // Close the previous course container
            }
            echo '<div class="course-container">';
        }
?>

<div class="card" onclick="openModal(<?php echo get_the_title(); ?>)">
    <img src="<?php echo get_theme_file_uri('/images/lakeSunrise.jpg')?>" alt="Course 1">
    <h2><?php echo wp_trim_words(get_the_title(), 3); ?></h2>
    <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
</div>

<?php       
        $counter++;

        if ($courses->current_post + 1 === $courses->post_count || $counter % 4 === 0) {
            echo '</div>'; // Close the last course container
        }
    }
}
?>

<div class="empty"></div> <!-- Temporary div -->

<div id="course-modal" class="course-modal">
    <div class="modal-content">
        <!-- Course content will be dynamically populated here -->
    </div>
</div>

<?php get_footer(); ?>