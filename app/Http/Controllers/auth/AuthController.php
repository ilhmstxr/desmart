<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{/**
     * Menampilkan halaman login.
     * Jika pengguna sudah login, alihkan ke dashboard.
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->intended('/dashboard');
        }
        return view('auth.login');
    }

    /**
     * Menangani proses login.
     */
    public function login(Request $request)
    {
        // PERBAIKAN: Menggunakan Auth::attempt() yang lebih aman dan efisien.
        // Metode ini secara otomatis akan memvalidasi kredensial (email dan password)
        // dan membuat sesi untuk pengguna jika berhasil.
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // PERBAIKAN: Memeriksa status 'is_active' sebelum mencoba login.
        $user = User::where('email', $credentials['email'])->first();

        if ($user && !$user->is_active) {
            throw ValidationException::withMessages([
                'email' => ['Akun Anda telah dinonaktifkan.'],
            ]);
        }

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // PERBAIKAN: Meregenerasi session untuk mencegah serangan session fixation.
            $request->session()->regenerate();

            // Mengarahkan ke halaman yang dituju sebelumnya atau ke dashboard.
            return redirect()->intended('/dashboard');
        }

        // Jika login gagal, kembalikan pesan error.
        throw ValidationException::withMessages([
            'email' => ['Kredensial yang diberikan tidak cocok dengan data kami.'],
        ]);
    }

    /**
     * Menampilkan halaman register.
     * Jika pengguna sudah login, alihkan ke dashboard.
     */
    public function showRegister()
    {
        if (Auth::check()) {
            return redirect()->intended('/dashboard');
        }
        return view('auth.register');
    }

    /**
     * Menangani proses registrasi pengguna baru.
     */
    public function register(Request $request)
    {
        // PERBAIKAN: Menggunakan objek Password dari Laravel untuk validasi
        // yang lebih kuat dan mudah dibaca (misal: minimal 8 karakter).
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(8)],
            'role' => ['required', 'in:admin,manager,worker'],
            'phone' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string'],
        ]);

        // PERBAIKAN: Mengenkripsi password langsung di dalam array data
        // untuk kode yang lebih bersih.
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Menambahkan status aktif secara default saat registrasi.
        $validatedData['is_active'] = 1;

        // Membuat pengguna baru dari data yang sudah divalidasi.
        $user = User::create($validatedData);

        // Langsung login-kan pengguna setelah registrasi berhasil.
        Auth::login($user);

        // Alihkan ke dashboard.
        return redirect('/dashboard');
    }

    /**
     * Menangani proses logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Membuat sesi menjadi tidak valid.
        $request->session()->invalidate();

        // Membuat token CSRF baru untuk keamanan.
        $request->session()->regenerateToken();

        // Mengarahkan ke halaman utama atau halaman login.
        return redirect('/');
    }
}
