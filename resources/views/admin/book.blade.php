<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - Admin Panel</title>
    <!-- Tambahkan Font Awesome untuk ikon -->
    <link rel="stylesheet" href="/css/buku.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Hallo Admin</h2>
        <ul>
            <li><a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{ route('dashboard.users') }}"><i class="fas fa-user"></i> Data User</a></li>
            <li class="active"><a href="{{ route('dashboard.books') }}"><i class="fas fa-book"></i> Data Buku</a></li>
            <li><a href="{{ route('dashboard.loans') }}"><i class="fas fa-exchange-alt"></i> Transaksi</a></li>
            <li>
                <form method="GET" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="search-bar">
            <div class="search-wrapper">
                <input type="text" placeholder="Cari..." class="search-input">
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <select class="category-select">
                <option>Kategori</option>
            </select>
        </div>

        <table class="book-table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Publisher</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Harry Potter</td>
                    <td>J.K. Rowling</td>
                    <td>Fantasy</td>
                    <td>Bloomsbury</td>
                    <td>10</td>
                    <td>
                        <button class="action-btn edit-btn">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="action-btn delete-btn">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>The Hobbit</td>
                    <td>J.R.R. Tolkien</td>
                    <td>Fantasy</td>
                    <td>HarperCollins</td>
                    <td>5</td>
                    <td>
                        <button class="action-btn edit-btn">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="action-btn delete-btn">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>1984</td>
                    <td>George Orwell</td>
                    <td>Dystopian</td>
                    <td>Secker & Warburg</td>
                    <td>8</td>
                    <td>
                        <button class="action-btn edit-btn">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="action-btn delete-btn">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>To Kill a Mockingbird</td>
                    <td>Harper Lee</td>
                    <td>Classic</td>
                    <td>J.B. Lippincott & Co.</td>
                    <td>7</td>
                    <td>
                        <button class="action-btn edit-btn">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="action-btn delete-btn">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>The Catcher in the Rye</td>
                    <td>J.D. Salinger</td>
                    <td>Classic</td>
                    <td>Little, Brown and Company</td>
                    <td>6</td>
                    <td>
                        <button class="action-btn edit-btn">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="action-btn delete-btn">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
