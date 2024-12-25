<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Perpustakaan Online</title>
    @laravelPWA
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/beforelogin.css" />
</head>

<body>

    <!-- Navbar -->
    <header class="top-bar">
        <div class="logo">
            <img alt="Library Logo" height="50" src="../img/emojione_books.png" width="50" />
            <span>Perpustakaan <br>Online</span>
        </div>
        <nav>
            <a href="#katalog">Katalog Buku</a>
            <a href="/pinjambuku/pinjambuku.html">Pinjam Buku</a>
            <a href="#contact-us">Contact Us</a>
        </nav>
        <div class="user-menu">
            <a href="{{ route('login') }}" class="login-link">Login</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="bgblue">
            <img src="/img/Group 239182.png" alt="bgblue">
        </div>
        <div class="hero">
            <div class="text">
                <h1>Selamat Datang <br>di <span>Perpustakaan <br> Online</span>!</h1>
                <p>Embark on a literary journey like never before with our revolutionary library application!
                    Introducing a seamless experience that transcends traditional boundaries, where you can effortlessly
                    search your favorite books.</p>
                <div class="search-bar">
                    <input placeholder="Cari" type="text" />
                    <button>Browse Now!</button>
                </div>
            </div>
        </div>
    </section>

    <section class="book-section" id="katalog">
        <div class="filter">
            <select>
                <option value="genre">Genre Buku </option>
                <option value="genre">Fiksi Ilmiah </option>
                <option value="genre">Fantasi </option>
                <option value="genre">Romansa </option>
                <option value="genre">Misteri </option>
                <option value="genre">Biografi </option>
                <option value="genre">Sejarah </option>
                <option value="genre">Sains </option>
            </select>
            <h2>Buku</h2>
        </div>
        <!-- <h2>Buku</h2> -->
        <div class="buku">
            <div class="books">
                <!-- Repeat book div as necessary -->
                <div class="book">
                    <img alt="Bumi" src="/img/Bumi.png" />
                    <p>Bumi</p>
                    <p class="author">Tere Liye</p>
                    <div class="hover-content">
                        <button class="wishlist">Add to wishlist</button>
                        <button class="borrow">Add to pinjam buku</button>
                    </div>
                </div>
                <div class="book">
                    <img alt="Bulan" src="/img/Bulan.png" />
                    <p>Bulan</p>
                    <p class="author">Tere Liye</p>
                    <div class="hover-content">
                        <button class="wishlist">Add to wishlist</button>
                        <button class="borrow">Add to pinjam buku</button>
                    </div>
                </div>
                <div class="book">
                    <img alt="Matahari" src="/img/Matahari.png" />
                    <p>Matahari</p>
                    <p class="author">Tere Liye</p>
                    <div class="hover-content">
                        <button class="wishlist">Add to wishlist</button>
                        <button class="borrow">Add to pinjam buku</button>
                    </div>
                </div>
                <div class="book">
                    <img alt="Bintang" src="/img/Bintang.png" />
                    <p>Bintang</p>
                    <p class="author">Tere Liye</p>
                    <div class="hover-content">
                        <button class="wishlist">Add to wishlist</button>
                        <button class="borrow">Add to pinjam buku</button>
                    </div>
                </div>
                <div class="book">
                    <img alt="Ceros dan Batozar" src="/img/Ceros dan Batozar.png" />
                    <p>Ceros dan Batozar</p>
                    <p class="author">Tere Liye</p>
                    <div class="hover-content">
                        <button class="wishlist">Add to wishlist</button>
                        <button class="borrow">Add to pinjam buku</button>
                    </div>
                </div>
                <div class="book">
                    <img alt="Komet" src="/img/Komet.png" />
                    <p>Komet</p>
                    <p class="author">Tere Liye</p>
                    <div class="hover-content">
                        <button class="wishlist">Add to wishlist</button>
                        <button class="borrow">Add to pinjam buku</button>
                    </div>
                </div>
                <div class="book">
                    <img alt="Komet Minor" src="/img/Komet Minor.png" />
                    <p>Komet Minor</p>
                    <p class="author">Tere Liye</p>
                    <div class="hover-content">
                        <button class="wishlist">Add to wishlist</button>
                        <button class="borrow">Add to pinjam buku</button>
                    </div>
                </div>
                <div class="book">
                    <img alt="Selena" src="/img/Selena.png" />
                    <p>Selena</p>
                    <p class="author">Tere Liye</p>
                    <div class="hover-content">
                        <button class="wishlist">Add to wishlist</button>
                        <button class="borrow">Add to pinjam buku</button>
                    </div>
                </div>
                <div class="book">
                    <img alt="Nebula" src="/img/Nebula.png" />
                    <p>Nebula</p>
                    <p class="author">Tere Liye</p>
                    <div class="hover-content">
                        <button class="wishlist">Add to wishlist</button>
                        <button class="borrow">Add to pinjam buku</button>
                    </div>
                </div>
                <!-- <div class="book">
                    <p>Show More Books</p>
                </div> -->
                <div class="show-more">
                    <a href="#" class="show-more-link">Show More Books</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer" id="contact-us">
        <div class="contact-info">
            <div class="gbrinfo">
                <img src="/img/fluent-color_library-20.png" alt="Library Icon" />
            </div>
            <div class="phone-info">
                <img src="/img/phone.png" alt="Phone Icon" class="phone-icon" />
                <p>+62 888 999 777</p>
            </div>
            <div class="email-info">
                <img src="/img/email.png" alt="email icon" class="email-icon" />
                <p>example@email.com</p>
            </div>
            <div class="lokasi-info">
                <img src="/img/location.png" alt="lokasi icon" class="lokasi-icon" />
                <p>Jl. Jalan, Kota Bandung, Jawa Barat, Indonesia</p>
            </div>
        </div>

        <div class="contact-form">
            <h2>Perpustakaan Online</h2>
            <p>Any question or remarks? Let us know!</p>
            <input type="text" placeholder="Enter your name" />
            <input type="email" placeholder="Enter your email" />
            <textarea placeholder="Type your message here"></textarea>
            <button>Submit</button>
        </div>
    </footer>

    <div class="copyright-info">
        <p>&copy; 2024 Perpustakaan Online. All rights reserved.</p>
    </div>

    <script src="js/beforelogin.js"></script>
</body>

</html>
