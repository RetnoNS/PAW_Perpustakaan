// Mengambil elemen-elemen dari form
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const phoneInput = document.getElementById("phonenumber");
const judulAuthorInput = document.getElementById("judulauthor");
const tanggalPinjamInput = document.getElementById("tanggalpinjam");
const tanggalKembaliInput = document.getElementById("tanggalkembali");
const durasiInput = document.getElementById("durasi");
const submitButton = document.getElementById("submitBtn");
const modal = document.getElementById("captcha-modal");
const closeButton = document.querySelector(".close-button");
const slider = document.getElementById("captcha-slider");
const canvas = document.querySelector(".captcha-canvas");
const ctx = canvas.getContext("2d");

submitButton.addEventListener("click", () => {
    modal.style.display = "block"; // Tampilkan modal
    drawPuzzlePiece(0); // Mulai dengan menggambar puzzle
});

// Event: Tutup modal saat tombol Close diklik
closeButton.addEventListener("click", () => {
    modal.style.display = "none"; // Sembunyikan modal
});

// Fungsi untuk menggambar puzzle di canvas
function drawPuzzlePiece(x) {
    const pieceWidth = 50; // Lebar puzzle
    const pieceHeight = 50; // Tinggi puzzle
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Bersihkan canvas
    ctx.fillStyle = "rgba(0, 0, 0, 0.5)"; // Warna puzzle
    ctx.fillRect(x, 50, pieceWidth, pieceHeight); // Gambar puzzle
}

// Event: Geser slider untuk memindahkan puzzle
slider.addEventListener("input", (event) => {
    const value = event.target.value; // Ambil nilai slider
    drawPuzzlePiece((canvas.width * value) / 100); // Update posisi puzzle
});

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
