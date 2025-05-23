<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title'   => 'Manajemen User',
            'user'     => User::get(),
            'content' => 'admin/user/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'   => 'Tambah User',
            'content' => 'admin/user/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dengan minimum password 8 karakter
        $data = $request->validate([
            'name'      => 'required',
            'email'     => 'required|unique:users',
            'password'  => 'required|min:8', // Minimal 8 karakter
            're_password'  => 'required|same:password',
        ], [
            'password.min' => 'Password harus minimal 8 karakter.'
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/admin/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title'   => 'Edit User',
            'user'     => User::find($id),
            'content' => 'admin/user/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID

        $data = $request->validate([
            'name'      => 'required',
            'email'     => 'required|unique:users,email,' . $id,
            'password'  => 'nullable|min:8', // Minimal 8 karakter jika diisi
            're_password' => 'nullable|same:password',
        ], [
            'password.min' => 'Password harus minimal 8 karakter.'
        ]);

        // Jika password diisi, maka update password
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']); // Hapus password dari data jika tidak diisi
        }

        $user->update($data); // Perbarui data user
        return redirect('/admin/user')->with('success', 'User berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/admin/user');
    }
}
