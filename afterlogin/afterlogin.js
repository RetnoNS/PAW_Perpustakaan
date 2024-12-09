document.addEventListener('DOMContentLoaded', function() {
    const toggler = document.querySelector('.navbar-toggler');
    const navbarContent = document.querySelector('#navbarContent');

    toggler.addEventListener('click', function() {
        navbarContent.classList.toggle('show');
    });
});
