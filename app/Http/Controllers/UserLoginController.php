<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    // Menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('front.register');
    }

    // Menangani proses registrasi
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:userLogin,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Membuat user baru
        $user = UserLogin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Proses login otomatis
        Auth::login($user);

        // Redirect ke halaman dashboard atau lainnya
        return redirect()->route('login')->with('success', 'Registration successful, you are now logged in.');
    }

    // Menampilkan form login
    public function showLoginForm()
    {
        return view('front.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = UserLogin::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['email' => 'The provided credentials are incorrect.']);
        }

        // Login user
        Auth::login($user);

        // Redirect ke dashboard atau halaman lain
        return redirect()->route('front.index')->with('success', 'Welcome back!');
    }
}
