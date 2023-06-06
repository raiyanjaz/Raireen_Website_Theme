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

<div class="card">
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

<!--
<div class="page">
    <div class="page-banner">
        <p><?php the_title(); ?></p>
    </div>
    <div class="page-body">
        <div class="page-content">
            <p><?php the_content(); ?></p>
        </div>
        <img src="<?php echo get_theme_file_uri('/images/lakeSunrise.jpg')?>">
    </div>
</div> --->

<?php get_footer(); ?>