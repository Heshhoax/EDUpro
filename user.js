function loadContent(option) {
    var contentDiv = document.getElementById('contentload');
    var url;

   
    switch (option) {
        case 'add':
            url = 'signin.php';
            break;
        case 'pp':
            url = 'uploaddp.php'; 
            break;
        case 'reset':
            url = 'forgotpassword.php';
            break;
        case 'financial':
            url = '#';
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
