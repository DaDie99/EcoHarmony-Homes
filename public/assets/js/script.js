// Open the modal
function openModal() {
    document.getElementById('loginModal').style.display = 'flex';
}

// Close the modal
function closeModal() {
    document.getElementById('loginModal').style.display = 'none';
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
    const modal = document.getElementById('loginModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }

}
// Place this in a file named script.js inside public/assets/js
document.querySelector('.login-form').addEventListener('submit', function(e) {
    const email = this.querySelector('input[name="email"]').value;
    const password = this.querySelector('input[name="password"]').value;

    if (!email || !password) {
        e.preventDefault();
        alert('Please fill in all fields.');
    }
});

// Simple Gallery Interaction (Placeholder for future enhancements)
const galleryImages = document.querySelectorAll('.property-gallery img');
galleryImages.forEach((img, index) => {
    img.addEventListener('click', () => {
        img.classList.toggle('active');
    });
});

