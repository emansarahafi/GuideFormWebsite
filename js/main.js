// Display current date and time
function displayCurrentDate() {
    const dateElement = document.getElementById("current_date");
    if (dateElement) {
        dateElement.innerHTML = Date();
    }
}

// Initialize on page load
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', displayCurrentDate);
} else {
    displayCurrentDate();
}
