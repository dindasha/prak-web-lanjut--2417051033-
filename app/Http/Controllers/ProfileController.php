<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile', [
            'nama'  => 'Dinda Shaumi Salsabila',
            'kelas' => 'Ilmu Komputer A',
            'npm'   => '2417051033',
            'foto'  => 'FOTO.jpg'
        ]);
    }
}