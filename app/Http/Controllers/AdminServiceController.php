<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title'   => 'Manajemen Service',
            'service'  => Service::get(),
            'content' => 'admin/service/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title'   => 'Tambah Service',
            'content' => 'admin/service/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'icon'     => 'required',
            'desc'   => 'required'
        ]);
        // $data["urutan"] = 0;

        // Upload gambar baru
        // if ($request->hasFile("gambar")) {
        //     $gambar = $request->file('gambar');
        //     $file_name = time() . '-' . $gambar->getClientOriginalName();
        //     $storage = 'uploads/services/';
        //     $gambar->move($storage, $file_name);
        //     $data['gambar'] = $storage . $file_name;
        // }

        // Simpan service ke database
        $service = Service::create($data);
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/admin/service');
    }

    public function edit(string $id)
    {
        $data = [
            'title'   => 'Edit Service',
            'service'  => Service::findOrFail($id),
            'content' => 'admin/service/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $data = $request->validate([
            'title' => 'required',
            'icon'     => 'required',
            'desc'   => 'required'
        ]);

        // Upload gambar baru jika ada
        // if ($request->hasFile("gambar")) {
        //     // Hapus gambar lama jika ada
        //     if ($service->gambar && file_exists($service->gambar)) {
        //         unlink($service->gambar);
        //     }

        //     $gambar = $request->file('gambar');
        //     $file_name = time() . '-' . $gambar->getClientOriginalName();
        //     $storage = 'uploads/services/';
        //     $gambar->move($storage, $file_name);
        //     $data['gambar'] = $storage . $file_name;
        // }

        $service->update($data);
        Alert::success('Sukses', 'Data berhasil diperbarui');
        return redirect('/admin/service');
    }

    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);

        // Hapus gambar jika ada
        if ($service->gambar && file_exists($service->gambar)) {
            unlink($service->gambar);
        }

        $service->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/admin/service');
    }
}
