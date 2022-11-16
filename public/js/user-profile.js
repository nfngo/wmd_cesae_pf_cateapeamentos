const showPassword = document.getElementById('show-password');

showPassword.addEventListener('click', (e) => {
    e.preventDefault();
    showPassword.classList.toggle('fa-eye');
    showPassword.classList.toggle('fa-eye-slash');
    let userPassword = document.getElementById('password');
    if (userPassword.type == 'text') {
        userPassword.type = 'password';
    } else {
        userPassword.type = 'text';
    }
});
