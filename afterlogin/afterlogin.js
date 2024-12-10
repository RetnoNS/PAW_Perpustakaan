function navigateToPage() {
    const select = document.getElementById("userMenu");
    const selectedValue = select.value;

    if (selectedValue) {
        window.location.href = selectedValue; // Mengarahkan ke URL yang dipilih
    }
}