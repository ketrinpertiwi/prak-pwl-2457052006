<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $users = $this->userModel->getUser();

        return view('list_user', [
            'title' => 'Daftar Pengguna',
            'users' => $users,
        ]);
    }

    public function create()
    {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->nama,
            'nim' => $request->npm,
            'kelas_id' => $request->kelas_id,
            'email' => $request->npm . '@example.com',
            'password' => bcrypt('password'),
        ]);

        return redirect('/user');
    }
}