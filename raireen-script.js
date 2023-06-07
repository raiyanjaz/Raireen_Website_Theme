function openModal(courseData) {
    // Get course information via AJAX or other method based on the courseId
    var test = "lol";
    // Populate modal content dynamically with course details
    var modalContent = document.querySelector('.modal-content');
    modalContent.innerHTML = '<h2>' + test+ '</h2>' + '<p>sssa</p>';
    
    // Display the modal
    var modal = document.getElementById('course-modal');
    modal.style.display = 'block';

    // Close the modal when the user clicks outside the modal content
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
}
