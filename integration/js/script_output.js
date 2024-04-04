// JavaScript untuk menampilkan peringatan yang lebih menarik dan menghilang setelah beberapa waktu
function showAlert(message, timeout = 3000) {
    const alertBox = document.createElement('div');
    alertBox.className = 'alert';
    alertBox.textContent = message;
    document.body.appendChild(alertBox);
    
    setTimeout(() => {
        alertBox.remove();
    }, timeout);
}

