<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi - Admin Panel</title>
    <!-- Tambahkan Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/transaksi.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Hallo Admin</h2>
        <ul>
            <li><a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{ route('dashboard.users') }}"><i class="fas fa-user"></i> Data User</a></li>
            <li><a href="{{ route('dashboard.books') }}"><i class="fas fa-book"></i> Data Buku</a></li>
            <li class="active"><a href="{{ route('dashboard.loans') }}"><i class="fas fa-exchange-alt"></i> Transaksi</a></li>
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
                <option>Status</option>
            </select>
        </div>

        <table class="transaction-table">
            <thead>
                <tr>
                    <th>Judul Buku</th>
                    <th>User</th>
                    <th>Tanggal Dipinjam</th>
                    <th>Tenggat Waktu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Harry Potter</td>
                    <td>zidni</td>
                    <td>2024-12-01</td>
                    <td>2024-12-15</td>
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
                    <td>retno nisa</td>
                    <td>2024-12-05</td>
                    <td>2024-12-20</td>
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
