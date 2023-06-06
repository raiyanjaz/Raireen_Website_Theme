<?php get_header(); ?>

<div class="page-banner">
    <p><?php the_title(); ?></p>
</div>

<?php 
if (get_the_ID(the_post()) == 33) {
    $courses = new WP_Query(array(
        'post_type' => 'courses'
    ));          
?>

<?php
        while ($courses->have_posts()) {
            for ($i = 0; $i < 4 && $courses->have_posts(); $i++) {     
?>
<div class="course-container">
    <?php
                for ($j = 0; $j < 4 && $courses->have_posts(); $j++) {
                    $courses->the_post();
    ?>
    <div class="card">
        <img src="<?php echo get_theme_file_uri('/images/lakeSunrise.jpg')?>" alt="Course 1">
        <h2><?php echo wp_trim_words(get_the_title(), 3); ?></h2>
        <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
    </div>
    <?php       
if ($courses->have_post() == false) {
    break;
}   
} 
    ?>
</div>
<?php   }?>
<?php 
        } 
    ?>

<?php
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