<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }
    function autentikasi(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Mengarahkan berdasarkan role
            if (Auth::user()->role_id == 1) {
                return redirect()->route('dashboard'); // Untuk role 1
            } if (Auth::user()->role_id == 2) {
                return redirect()->route('index'); // Untuk role 2
            }

        }
        Session::flash('error', 'Email atau Password salah.');
        return redirect()->route('login');

        // Jika gagal, kembalikan ke halaman login
        return back()
            ->withErrors(['email' => 'Email atau password salah.'])
            ->withInput();
    }

    function register() {
        return view('register');
    }

    // Tangani proses registrasi
    function registrasi(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'fullname' => 'required|string|max:255',
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'fullname' => $validatedData['fullname'],
            'status' => 'active', // Default status
            'role' => 2, // Default role sebagai user
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
