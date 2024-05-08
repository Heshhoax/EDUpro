function loadContent(option) {
    var contentDiv = document.getElementById('contentload');
    var url;

   
    switch (option) {
        case 'settings':
            url = 'managerforgotpassword.php';
            break;
        case 'user':
            url = 'Heshancrud.php'; 
            break;
        case 'lecturer':
            url = 'inukaincludes/read.php';
            break;
        case 'financial':
            url = '##';
            break;
        case 'pp':
            url = 'uploaddp.php';
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
