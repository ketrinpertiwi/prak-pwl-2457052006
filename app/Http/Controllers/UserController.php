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

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);

        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        return view('edit_user', [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
        ]);

        $user = UserModel::findOrFail($id);

        $user->update([
            'name' => $request->nama,
            'nim' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/user');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);

        $user->delete();

        return redirect('/user');
    }
}