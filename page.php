<?php get_header(); ?>

<div class="page-banner">
    <p><?php the_title(); ?></p>
</div>

<?php 
if (get_the_ID() == 33) { // If on the service page
    $courses = new WP_Query(array(
        'post_type' => 'courses'
    ));          
    
    $counter = 0; // Initialize counter variable

    while ($courses->have_posts()) {
        $courses->the_post();
        
        if ($counter % 5 === 0) { // Create a new course container every fourth post
            if ($counter > 0) {
                echo '</div>'; // Close the previous course container
            }
            echo '<div class="course-container">';
        }
?>

<div class="card" onclick="openModal(<?php echo get_the_ID(); ?>)">
    <?php
    if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail');
    } else {
        // Display a default thumbnail if no featured image is set
        echo '<img src="' . get_theme_file_uri('images\mathTutoring.jpg') . '" alt="Default Thumbnail">';
    }
    ?>
    <h2><?php echo wp_trim_words(get_the_title(), 3); ?></h2>
    <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
</div>

<?php       
        $counter++;

        if ($courses->current_post + 1 === $courses->post_count || $counter % 5 === 0) {
            echo '</div>'; // Close the last course container
        }
    }
} else { 
?>

<section class="first">
    <div class="container">
        <p> <?php echo get_the_content(); ?></p>
        <a class="cta" href="../services">Discover more ⟩</a>
    </div>
</section>
<section class="four">
    <div class="container">
        <div class="member">
            <img src="./img/photo-3.jpg" alt="photo">
            <h3>Margaret Hilda</h3>
            <p>Sitamet ipsum dolor consectetur adipisicing elit. Similique numquam aperiam commodi! Id, ipsam pariatur!
                Ex cupiditate officiis iste laboriosam quibusdam esse illo praesentium, nemo necessitatibus tempore.</p>
            <div class="social">
                <a title="LinkedIn" href="index.html"><img src="./img/linkedin.png" alt="linkedin"></a>
                <a title="Facebook" href="index.html"><img src="./img/facebook.png" alt="facebook"></a>
                <a title="Instagram" href="index.html"><img src="./img/instagram.png" alt="instagram"></a>
            </div>
        </div> <!-- .member -->
        <div class="member">
            <img src="./img/photo-4.jpg" alt="photo">
            <h3>Justin Trudeau</h3>
            <p>Lpsum dolor sit amet consectetur adipisicing elit. Similique numquam aperiam commodi! Id, ipsam pariatur!
                Ex cupiditate officiis iste laboriosam quibusdam esse illo praesentium.</p>
            <div class="social">
                <a title="LinkedIn" href="index.html"><img src="./img/linkedin.png" alt="linkedin"></a>
                <a title="Instagram" href="index.html"><img src="./img/instagram.png" alt="instagram"></a>
                <a title="Medium" href="index.html"><img src="./img/medium.png" alt="medium"></a>
            </div> <!-- .social -->
        </div> <!-- .member -->
        <div class="member">
            <img src="./img/photo-5.jpg" alt="photo">
            <h3>Yoweri Museveni</h3>
            <p>Consectetur upsum dolor sit amet adipisicing elit. Similique numquam aperiam commodi! Id ipsam pariatur!
                Ex cupiditate officiis iste laboriosam quibusdam esse illo praesentium, nemo necessitatibus tempore.
                Cupiditate officiis iste laboriosam.</p>
            <div class="social">
                <a title="LinkedIn" href="index.html"><img src="./img/linkedin.png" alt="linkedin"></a>
                <a title="Facebook" href="index.html"><img src="./img/facebook.png" alt="facebook"></a>
                <a title="Medium" href="index.html"><img src="./img/medium.png" alt="medium"></a>
            </div> <!-- .social -->
        </div> <!-- .member -->
    </div> <!-- .container -->
</section> <!-- .four -->
<section class="five">
    <div class="container">
        <div class="video-wrapper">
            <video width="560" height="315" controls>
                <source src="./img/video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div> <!-- .video-wrapper -->
    </div> <!-- .container -->
</section> <!-- .five -->
<section class="six">
    <div class="container">
        <h4>Taborum modi fugiat rem aliquid quod</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum laboriosam laborum modi fugiat rem aliquid quod?
            Non, laudantium, aperiam deserunt sequi harum mollitia sapiente magnam rem expedita voluptas necessitatibus
            quam!</p>
        <img src="./img/photo-6.jpg" alt="let's get started">
        <p><i>Magnam reprehenderit sequi provident minima! Molestiae eum repudiandae dolorem sapiente, expedita debitis
                corrupti quia! Suscipit, officia. Tenetur perspiciatis totam debitis maxime nam. Lorem, ipsum dolor sit
                amet consectetur adipisicing elit.</i></p>
        <a class="cta" href="index.html">Contact us »</a>
    </div>
</section>

<?php
}
?>

<div id="course-modal" class="course-modal">

    <div class="modal-content">
        <!-- Course content will be dynamically populated here -->
    </div>
</div>

<?php get_footer(); ?>