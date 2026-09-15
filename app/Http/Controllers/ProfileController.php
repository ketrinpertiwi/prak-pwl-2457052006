<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Ketrin Pertiwi',
            'npm' => '2457052006',
            'kelas' => 'Kelas SI'
        ];

        return view('profile', $data);
    }
}