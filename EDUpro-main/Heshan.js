function loadContent(option) {
    var contentDiv = document.getElementById('contentload');
    var url;

   
    switch (option) {
        case 'settings':
            url = 'settings.html';
            break;
        case 'user':
            url = 'Heshancrud.php'; 
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

   
    fetch(url)
        .then(response => response.text())
        .then(data => {
          
            contentDiv.innerHTML = data;
        })
        .catch(error => console.error('Error loading content:', error));
}


function logout() {
    alert('Logged out');
}
