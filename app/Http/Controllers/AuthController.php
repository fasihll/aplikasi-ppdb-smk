<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $data = User::where('email', $request->email)->first();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                session([
                    'berhasil_login' => true,
                    'name' => $data->name,
                    'id_user' => $data->id,
                    'level' => $data->level
                ]);
                return redirect()->route('dashboard')->with('message', 'Selamat datang ' . $data->name . '');
            }
            return back()->with('message', 'Username atau password Salah!');
        }
        return back()->with('message', 'Email Tidak Ditemukan');
    }

    public function register()
    {
        return view('register');
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password2' => 'required|same:password'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];
        User::insert($data);

        return redirect()->route('login')->with('message', 'Silahkan Login!');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
