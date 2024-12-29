<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Perpustakaan Online</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="berita.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <!-- Logo dan Teks -->
                <div class="logo d-flex align-items-center ms-3">
                    <img alt="Library Logo" height="50" src="../img/emojione_books.png" width="50" class="me-3" />
                    <span class="fw-bold" style="color: #3b82f6;">Perpustakaan Online</span>
                </div>

                <!-- Tombol Hamburger untuk Menu Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu Offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="fw-bold" style="color: #3b82f6;" id="offcanvasNavbarLabel">Perpustakaan Online</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="../profil/profil.html">profil</a>
                            </li>
                            <!-- Katalog Buku -->
                            <li class="nav-item">
                                <a class="nav-link" href="#katalog">Katalog Buku</a>
                            </li>
                            <!-- Pinjam Buku -->
                            <li class="nav-item">
                                <a class="nav-link" href="/pinjambuku/pinjambuku.html">Pinjam Buku</a>
                            </li>
                            <!-- Wishlist Buku -->
                            <li class="nav-item">
                                <a class="nav-link" href="/wishlistbuku/wishlistbuku.html">Wishlist Buku</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../berita/berita.html">berita</a>
                            </li>
                            <!-- Contact Us -->
                            <li class="nav-item">
                                <a class="nav-link" href="#contact-us">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/landingpage/landingpage.html">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Hero Section -->
    <?php
        // URL untuk mengambil data dari API
        $url = 'https://newsapi.org/v2/top-headlines?apiKey=064383c9fa314fa384fdae200018f03e&category=science';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    
        // Periksa kode HTTP
        if ($httpCode == 200) {
            $NewsData = json_decode($response, true);
        } else {
            die("Error: Unable to fetch data. HTTP Code: $httpCode");
        }

        // Validasi data
        if (!isset($NewsData['articles']) || !is_array($NewsData['articles'])) {
            die('Error: Invalid API response.');
        }
    ?>
    <div class="jumbotron text-center bg-primary text-white py-4">
        <h1>Science News</h1>
    </div>
    <div class="container-fluid">
        <?php foreach ($NewsData['articles'] as $News): ?>
        <div class="row NewsGrid my-4">
            <div class="col-md-3">
                <img src="<?= htmlspecialchars($News['urlToImage'] ?? 'placeholder.jpg') ?>" alt="News thumbnail" class="rounded img-fluid">
            </div>
            <div class="col-md-9">
                <h2>Title: <?= htmlspecialchars($News['title'] ?? 'No Title') ?></h2>
                <h5>Description: <?= htmlspecialchars($News['description'] ?? 'No Description') ?></h5>
                <p>Content: <?= htmlspecialchars($News['content'] ?? 'No Content') ?></p>
                <h6>Author: <?= htmlspecialchars($News['author'] ?? 'Unknown') ?></h6>
                <h6>Published: <?= htmlspecialchars($News['publishedAt'] ?? 'No Date') ?></h6>
                <a href="<?= htmlspecialchars($News['url'] ?? '#') ?>" class="btn btn-primary" target="_blank">Read More</a>
            </div>       
        </div>
        <hr>
        <?php endforeach; ?>
    </div>
</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="afterlogin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html