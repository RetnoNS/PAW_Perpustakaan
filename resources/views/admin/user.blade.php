<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User - Admin Panel</title>
    <!-- Tambahkan Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/user.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Hallo Admin</h2>
        <ul>
            <li><a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li class="active"><a href="{{ route('dashboard.users') }}"><i class="fas fa-user"></i> Data User</a></li>
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
        <div class="search-bar">
            <div class="search-wrapper">
                <input type="text" placeholder="Cari..." class="search-input">
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <table class="user-table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>••••••</td> <!-- Menyembunyikan password -->
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>
                        <a href="{{ route('dashboard.users.edit', $user->id) }}" class="action-btn edit-btn">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form method="POST" action="{{ route('dashboard.users.delete', $user->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this user?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
