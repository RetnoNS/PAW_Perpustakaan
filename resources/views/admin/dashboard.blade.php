<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin Panel</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Hallo Admin</h2>
        <ul>
            <li class="active"><a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{ route('dashboard.users') }}"><i class="fas fa-user"></i> Data User</a></li>
            <li><a href="{{ route('dashboard.books') }}"><i class="fas fa-book"></i> Data Buku</a></li>
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
        <h1>Ringkasan Admin</h1>
        <div class="stats">
            <!-- Card for Total Books -->
            <div class="stat" onclick="window.location='{{ route('dashboard.books') }}'">
                <h2>{{ $totalBooks }}</h2>
                <p>Buku</p>
            </div>

            <!-- Card for Late Returns -->
            <div class="stat" onclick="window.location='{{ route('dashboard.loans') }}'">
                <h2>{{ $lateReturns }}</h2>
                <p>Terlambat</p>
            </div>

            <!-- Card for Total Users -->
            <div class="stat" onclick="window.location='{{ route('dashboard.users') }}'">
                <h2>{{ $totalUsers }}</h2>
                <p>User</p>
            </div>
        </div>

        <table class="task-table">
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>User</th>
                    <th>Status</th>
                    <th>Due Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Harry Potter</td>
                    <td>zidni</td>
                    <td><span class="status overdue">Overdue</span></td>
                    <td>2024-12-01</td>
                </tr>
                <tr>
                    <td>The Hobbit</td>
                    <td>retno nisa</td>
                    <td><span class="status in-progress">In Progress</span></td>
                    <td>2024-12-15</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
