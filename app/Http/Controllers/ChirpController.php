<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            "Halo dunia!",
            "Saya sedang belajar Laravel",
            "Ini tugas chirps saya"
        ];

        return view('welcome', [
            'chirps' => $chirps
        ]);
    }
}