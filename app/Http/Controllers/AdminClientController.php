<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'name'   => 'Manajemen Client',
            'client'  => Client::get(),
            'content' => 'admin/client/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'name'   => 'Tambah Client',
            'content' => 'admin/client/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            
        ]);
        // $data["urutan"] = 0;

        // Upload gambar baru
        // if ($request->hasFile("gambar")) {
        //     $gambar = $request->file('gambar');
        //     $file_name = time() . '-' . $gambar->getClientOriginalName();
        //     $storage = 'uploads/clients/';
        //     $gambar->move($storage, $file_name);
        //     $data['gambar'] = $storage . $file_name;
        // }

        // Simpan client ke database
        Client::create($data);
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/admin/client');
    }

    public function edit(string $id)
    {
        $data = [
            'name'   => 'Edit Client',
            'client'  => Client::findOrFail($id),
            'content' => 'admin/client/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $data = $request->validate([
            'name' => 'required',
        
        ]);

        // Upload gambar baru jika ada
        // if ($request->hasFile("gambar")) {
        //     // Hapus gambar lama jika ada
        //     if ($client->gambar && file_exists($client->gambar)) {
        //         unlink($client->gambar);
        //     }

        //     $gambar = $request->file('gambar');
        //     $file_name = time() . '-' . $gambar->getClientOriginalName();
        //     $storage = 'uploads/clients/';
        //     $gambar->move($storage, $file_name);
        //     $data['gambar'] = $storage . $file_name;
        // }

        $client->update($data);
        Alert::success('Sukses', 'Data berhasil diperbarui');
        return redirect('/admin/client');
    }

    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);

        // Hapus gambar jika ada
        // if ($client->gambar && file_exists($client->gambar)) {
        //     unlink($client->gambar);
        // }

        $client->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/admin/client');
    }
}
