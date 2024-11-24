document.getElementById('loginForm').addEventListener('submit', function(event) {
    let isValid = true;

    // Validate username
    const username = document.getElementById('username');
    if (username.value.trim() === '') {
        username.style.borderColor = 'red';
        isValid = false;
    } else {
        username.style.borderColor = '';
    }

    // Validate password
    const password = document.getElementById('password');
    if (password.value.trim() === '') {
        password.style.borderColor = 'red';
        isValid = false;
    } else {
        password.style.borderColor = '';
    }

    if (!isValid) {
        event.preventDefault(); // Prevent form submission if validation fails
    }
});
