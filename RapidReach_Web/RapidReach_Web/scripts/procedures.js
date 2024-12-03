function showGuide(guideId) {
    // Hide all guides by removing the 'visible' class
    const containers = document.querySelectorAll('.container');
    containers.forEach(container => container.classList.remove('visible'));

    // Find and show the selected guide by adding the 'visible' class
    const selectedGuide = document.getElementById(guideId);
    if (selectedGuide) {
        selectedGuide.classList.add('visible');
    }
}
