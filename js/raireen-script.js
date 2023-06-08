function openModal(courseId) {
    fetch('/wp-json/custom/v1/courses/' + courseId)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error: ' + response.status);
            }
            return response.json();
        })
        .then(courseData => {
            populateModal(courseData);
            showModal();
        })
        .catch(error => {
            console.error(error);
        });
}

function populateModal(courseData) {
    var modalContent = document.querySelector('.modal-content');
    modalContent.innerHTML = `
        <img src="${courseData.thumbnail}" alt="${courseData.title}" class="modal-image">
        <h2>${courseData.title}</h2>
        <p>${courseData.content}</p>
    `;
}

function showModal() {
    var modal = document.getElementById('course-modal');
    modal.style.display = 'block';
    modal.style.transition = 'all 1s';

    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
}
