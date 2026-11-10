<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return response()->view('login');
    }


    public function processLogin(Request $request)
    {
        $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
            ]);
        $akun = ['dading' => '12345',
        'alya' => '54321',
            ];


        $username = strtolower($request->input('username'));
        $password = $request->input('password');


        if (!isset($akun[$username]) || $akun[$username] !== $password) {
            return back()->with('error', 'Username atau password salah!');
        }


        return redirect()->route('dashboard', [
            'username' => $username
        ]);
    }


    public function dashboard(Request $request)
    {

        $username = $request->query('username');


        if (!in_array($username, ['dading', 'alya'])) {
            return redirect('/');
        }


        return response()->view('dashboard', [
            'username' => $username
        ]);
    }


    public function profile(Request $request)
    {

        $username = $request->query('username');

        if (!in_array($username, ['dading', 'alya'])) {
            return redirect('/');
        }

        return response()->view('profile', [
            'username' => $username
        ]);
    }


    public function pengelolaan(Request $request)
    {

        $username = $request->query('username');

        if (!in_array($username, ['dading', 'alya'])) {return redirect('/'); }


        $allAktivitas = [
            'dading' => [
                ['name' => 'Belajar Laravel', 'category' => 'Kuliah'],
                ['name' => 'Rapat General', 'category' => 'Organisasi'],
                ['name' => 'Mengerjakan UTS PBO', 'category' => 'Praktikum'],
            ],

            'alya' => [
                ['name' => 'Belajar Matematika', 'category' => 'Kuliah'],
                ['name' => 'Mengikuti Mubes', 'category' => 'Organisasi'],
                ['name' => 'Mengerjakan UTS PWEB', 'category' => 'Praktikum'],
            ],
        ];


        $aktivitas = $allAktivitas[$username];


        return response()->view('pengelolaan', [
            'username' => $username,
            'aktivitas' => $aktivitas
        ]);
    }


    public function logout()
    {return redirect('/');}
}
