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
            <li class="active"><a href="/admin/dashboard/dashboard.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="/admin/user/user.html"><i class="fas fa-user"></i> Data User</a></li>
            <li><a href="/admin/buku/buku.html"><i class="fas fa-book"></i> Data Buku</a></li>
            <li><a href="/admin/transaksi/transaksi.html"><i class="fas fa-exchange-alt"></i> Transaksi</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Ringkasan Admin</h1>
        <div class="stats">
            <div class="stat">
                <h2>30</h2>
                <p>Buku</p>
            </div>
            <div class="stat">
                <h2>2</h2>
                <p>Overdue</p>
            </div>
            <div class="stat">
                <h2>4</h2>
                <p>In progress</p>
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
