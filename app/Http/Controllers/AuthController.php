<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginAction(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6'
        ]);

        // Ambil data user berdasarkan email
        $user = User::where('email', $validated['email'])->first();

        // Cek apakah user ada
        if (!$user) {
            return redirect()->back()->with('error', 'wrong email or password!');
        }

        // Cek apakah password benar
        if (!Hash::check($request->input('password'), $user->password)) {
            return redirect()->back()->with('error', 'Password salah');
        }

        // Login user
        auth()->login($user);

        // Redirect ke halaman home
        return redirect()->route('home.index');
    }

    public function register()
    {
        return view('register');
    }

    public function registerAction(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|string|min:6|same:password'
        ]);

        $user = User::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        // Login user
        // auth()->login($user);
        $user->save();

        // Redirect ke halaman home
        return redirect()->route('auth.index')->with('success', 'Registrasi akun berhasil, silahkan login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth.index')->with('success', 'Logout berhasil');
    }
}
