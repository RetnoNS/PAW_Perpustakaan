// Mengambil elemen-elemen dari form
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const phoneInput = document.getElementById("phonenumber");
const judulAuthorInput = document.getElementById("judulauthor");
const tanggalPinjamInput = document.getElementById("tanggalpinjam");
const tanggalKembaliInput = document.getElementById("tanggalkembali");
const durasiInput = document.getElementById("durasi");
const pinjamButton = document.querySelector("button[type='btnpinjam']");

// Menambahkan event listener ke tombol "Pinjam Buku"
pinjamButton.addEventListener("click", (event) => {
    event.preventDefault(); // Mencegah form dari reload halaman

    // Validasi input
    if (
        !nameInput.value ||
        !emailInput.value ||
        !phoneInput.value ||
        !judulAuthorInput.value ||
        !tanggalPinjamInput.value ||
        !tanggalKembaliInput.value ||
        !durasiInput.value
    ) {
        alert("Harap isi semua field!");
        return;
    }

    // Mengambil data dari input
    const formData = {
        name: nameInput.value,
        email: emailInput.value,
        phone: phoneInput.value,
        judulAuthor: judulAuthorInput.value,
        tanggalPinjam: tanggalPinjamInput.value,
        tanggalKembali: tanggalKembaliInput.value,
        durasi: durasiInput.value
    };

    // Menampilkan data sebagai konfirmasi
    alert(
        `Buku berhasil dipinjam!\n\n` +
        `Nama: ${formData.name}\n` +
        `Email: ${formData.email}\n` +
        `Nomor Telepon: ${formData.phone}\n` +
        `Judul Buku - Author: ${formData.judulAuthor}\n` +
        `Tanggal Peminjaman: ${formData.tanggalPinjam}\n` +
        `Tanggal Pengembalian: ${formData.tanggalKembali}\n` +
        `Durasi Peminjaman: ${formData.durasi} hari`
    );

    window.location.href = "../afterlogin/afterlogin.html";
    // Reset form setelah data diambil
    nameInput.value = "";
    emailInput.value = "";
    phoneInput.value = "";
    judulAuthorInput.value = "";
    tanggalPinjamInput.value = "";
    tanggalKembaliInput.value = "";
    durasiInput.value = "";
});
