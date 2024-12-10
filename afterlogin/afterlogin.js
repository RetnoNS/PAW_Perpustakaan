<<<<<<< HEAD
function navigateToPage() {
    const select = document.getElementById("userMenu");
    const selectedValue = select.value;

    if (selectedValue) {
        window.location.href = selectedValue; // Mengarahkan ke URL yang dipilih
    }
}
=======
document.addEventListener('DOMContentLoaded', function() {
    const toggler = document.querySelector('.navbar-toggler');
    const navbarContent = document.querySelector('#navbarContent');

    toggler.addEventListener('click', function() {
        navbarContent.classList.toggle('show');
    });
});
>>>>>>> c1f39d86056322ebfed3fc0aee7a275b83fbedef
