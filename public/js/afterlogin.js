function navigateToPage() {
    const userMenu = document.getElementById("userMenu");
    const selectedValue = userMenu.value;

    // Pastikan pengguna memilih opsi valid
    if (selectedValue !== "logout") {
      window.location.href = selectedValue; // Redirect ke halaman yang dipilih
    }
  }