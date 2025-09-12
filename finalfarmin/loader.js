 // Wait for the window to load
 window.addEventListener('load', function() {
    // Hide the preloader after 3 seconds
    setTimeout(function() {
        document.body.classList.add('loaded');
    }, 100); // Adjust the duration as needed (in milliseconds)
});