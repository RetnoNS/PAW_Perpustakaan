const acceptButton = document.getElementById("login");

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Simple validation (for demonstration purposes)
    if (username && password) {
        alert(`Welcome, ${username}!`);
    } else {
        alert('Please fill out all fields.');
    }
});

document.getElementById("login");

document.getElementById("login").addEventListener("click", function () {
  window.location.href = "/afterlogin/afterlogin.html";
});

