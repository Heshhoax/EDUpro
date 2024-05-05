// script.js
// Function to load content dynamically based on the button clicked
function loadContent(option) {
    var contentDiv = document.getElementById('contentload');
    var url;

    // Determine the URL based on the option
    switch (option) {
        case 'settings':
            url = 'settings.html';
            break;
        case 'user':
            url = 'Heshancrud.php'; // Changed to Heshancrud.php for 'user' option
            break;
        case 'lecturer':
            url = 'lecturer.html';
            break;
        case 'financial':
            url = 'financial.html';
            break;
        case 'help':
            url = 'help.html';
            break;
        default:
            console.error('Invalid option');
            return;
    }

    // Fetch content from the URL
    fetch(url)
        .then(response => response.text())
        .then(data => {
            // Insert loaded content into the content div
            contentDiv.innerHTML = data;
        })
        .catch(error => console.error('Error loading content:', error));
}

// Function to simulate logout (replace with your actual logout function)
function logout() {
    alert('Logged out');
}
