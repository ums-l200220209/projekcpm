<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class AdminBannerController extends Controller
{
    public function index()
    {
        $data = [
            'title'   => 'Manajemen Banner',
            'banner'  => Banner::get(),
            'content' => 'admin/banner/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title'   => 'Tambah Banner',
            'content' => 'admin/banner/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'headline' => 'required',
            'desc'     => 'required',
            'gambar'   => 'required|'
        ]);
        $data["urutan"] = 0;

        // Upload gambar baru
        if ($request->hasFile("gambar")) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        }

        // Simpan banner ke database
        $banner = Banner::create($data);

        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/admin/banner');
    }

    public function edit(string $id)
    {
        $data = [
            'title'   => 'Edit Banner',
            'banner'  => Banner::findOrFail($id),
            'content' => 'admin/banner/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);
        $data = $request->validate([
            'headline' => 'required',
            'desc'     => 'required',
        ]);
        $data["urutan"] = 0;

        // Upload gambar baru jika ada
        if ($request->hasFile("gambar")) {
            // Hapus gambar lama jika ada
            if ($banner->gambar && file_exists($banner->gambar)) {
                unlink($banner->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        }

        $banner->update($data);
        return redirect('/admin/banner')->with('success', 'Banner berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $banner = Banner::findOrFail($id);

        // Hapus gambar jika ada
        if ($banner->gambar && file_exists($banner->gambar)) {
            unlink($banner->gambar);
        }

        $banner->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/admin/banner');
    }
}
