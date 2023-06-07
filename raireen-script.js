function openModal(courseId) {
    // Get course information via AJAX or other method based on the courseId
    
    // Populate modal content dynamically with course details
    var modalContent = document.querySelector('.modal-content');
    modalContent.innerHTML = '<h2><?php echo get_the_title()?></h2><p>Course description</p>';
    
    // Display the modal
    var modal = document.getElementById('course-modal');
    modal.style.display = 'block';
    
    // Close the modal when the user clicks on the close button
    var closeBtn = document.querySelector('.close');
    closeBtn.onclick = function() {
        modal.style.display = 'none';
    }
    
    // Close the modal when the user clicks outside the modal content
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
}
