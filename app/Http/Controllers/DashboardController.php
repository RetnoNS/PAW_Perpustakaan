<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $totalUsers = User::count();
        $totalBooks = Book::count();
        $lateReturns = Loan::where('status', 'belum')
            ->where('tanggal_pengembalian', '<', now())
            ->count();
        return view('admin.dashboard', compact('totalUsers', 'totalBooks', 'lateReturns'));
    }

    // user controller
    public function users()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
        //buat table pop up untuk edit user
    }

    public function editUser(User $user)
    {
        return view('admin.edit-user', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            // Email dan password tidak perlu divalidasi karena tidak dapat diubah
        ]);

        $user->update([
            'username' => $request->username,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('dashboard.users')->with('success', 'User updated successfully.');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.users')->with('success', 'User deleted successfully.');
    }


    // user controller

    public function books()
    {
        $books = Book::all();
        return view('admin.book', compact('books'));
    }

    public function loans()
    {
        $loans = Loan::with(['booking.user', 'booking.book'])->where('status', 'belum')
            ->where('tanggal_pengembalian', '<', now())->get();
        return view('admin.transaksi', compact('loans'));
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

}
