<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
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
            $role = Auth::user()->role_id;
            if ($role == 1) {
                return redirect()->route('dashboard'); // Admin
            } elseif ($role == 2) {
                return redirect()->route('index'); // User
            }

        }
        Session::flash('error', 'Email atau Password salah.');
        return redirect()->route('login')->withInput();

        // Jika gagal, kembalikan ke halaman login
        return back()
            ->withErrors(['email' => 'Email atau password salah.'])
            ->withInput();
    }

    function register() {
        return view('register');
    }

    function createUser(Request $request) {
        $credentials = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'fullname' => ['required'],
            'phone_number' => ['required'],
            'address' => ['required']
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fullname' => $request->fullname,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'status' => 'inactive',
            'role_id' => 2, // Default sebagai user
        ]);

        Auth::login($user);

        event(new Registered($user));

        return redirect('/profile');
    }

    // Tangani proses registrasi
    // function registrasi(Request $request) {
    //     $validatedData = $request->validate([
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //         'fullname' => 'required|string|max:255',
    //         'phone_number' => 'required|string|max:15',
    //         'address' => 'required|string|max:255',
    //     ]);

    //     User::create([
    //         'username' => $validatedData['username'],
    //         'email' => $validatedData['email'],
    //         'password' => Hash::make($validatedData['password']),
    //         'fullname' => $validatedData['fullname'],
    //         'phone_number' => $validatedData['phone_number'],
    //         'address' => $validatedData['address'],
    //         'status' => 'inactive',
    //         'role_id' => 2, // Default sebagai user
    //     ]);
    //     return redirect('login');
    // }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
