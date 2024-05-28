// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Get all nav links
    const navLinks = document.querySelectorAll('.nav-link');

    // Add click event listener to each nav link
    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            // Prevent the default behavior
            event.preventDefault();
            
            // Remove the 'active' class from all links
            navLinks.forEach(link => link.classList.remove('active'));
            
            // Add the 'active' class to the clicked link
            this.classList.add('active');
        });
    });
});
