function loadContent(option) {
    var contentDiv = document.getElementById('contentload');
    var url;

   
    switch (option) {
        case 'create':
            url = 'dinithiincludes/examform.php';
            break;
        case 'view':
            url = 'dinithiincludes/examread.php'; 
            break;
        case 'reset':
            url = 'examinerforgotpassword.php';
            break;
        case 'pp':
            url = 'uploaddp.php';
            break;
        case 'help':
            url = '#';
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
