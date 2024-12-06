// const mycanvas = document.getElementById('mycanvas');

// // Set ukuran awal canvas
// mycanvas.width = window.innerWidth;
// mycanvas.height = window.innerHeight;

// const c = mycanvas.getContext('2d');

// // Fungsi untuk menggambar path
// function drawPath() {
//     c.clearRect(0, 0, mycanvas.width, mycanvas.height); // Bersihkan canvas

//     //bawah
//     c.fillStyle = 'black';
//     c.beginPath();
//     c.moveTo(900, 250);
//     c.lineTo(1271, 500);
//     c.arcTo(800, 500, 750, 500, 50); // Lengkung di sudut bawah
//     // c.lineTo(800, 500);
//     c.closePath();
//     c.fill(); 


//     // path atas
//     // c.fillStyle = '#4475F2';
//     // c.beginPath();
//     // c.moveTo(750, 0);
//     // c.lineTo(1271, 0);
//     // c.lineTo(1271, 600);
//     // c.lineTo(1000, 600);
//     // c.closePath();
//     // c.fill(); 
// }

// // Gambar path pertama kali
// drawPath();

// // Update ukuran canvas dan gambar ulang path saat layar diubah ukurannya
// window.addEventListener('resize', () => {
//     mycanvas.width = window.innerWidth;
//     mycanvas.height = window.innerHeight;
//     drawPath(); // Gambar ulang setelah ukuran canvas diperbarui
// });
