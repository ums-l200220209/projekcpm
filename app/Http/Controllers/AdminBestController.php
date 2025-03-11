<?php

namespace App\Http\Controllers;
use App\Models\BestSeller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class AdminBestController extends Controller
{

    public function index()
    {
        $data = [
            'title'   => 'Manajemen BestSeller',
            'bestseller'  => BestSeller::get(),
            'content' => 'admin/bestseller/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title'   => 'Tambah BestSeller',
            'content' => 'admin/bestseller/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body'     => 'required',
            'cover'   => 'required|'
        ]);
    

        // Upload cover baru
        if ($request->hasFile("cover")) {
            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            $storage = 'uploads/bestsellers/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }

        // Simpan bestseller ke database
        $bestseller = BestSeller::create($data);

        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/admin/posts/bestseller');
    }

    public function edit(string $id)
    {
        $data = [
            'title'   => 'Edit BestSeller',
            'bestseller'  => BestSeller::findOrFail($id),
            'content' => 'admin/bestseller/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $bestseller = BestSeller::findOrFail($id);
        $data = $request->validate([
            'title' => 'required',
            'body'     => 'required',
            'cover'   => 'required|'
        ]);
    

        // Upload cover baru jika ada
        if ($request->hasFile("cover")) {
            // Hapus cover lama jika ada
            if ($bestseller->cover && file_exists($bestseller->cover)) {
                unlink($bestseller->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            $storage = 'uploads/bestsellers/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }

        $bestseller->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate');
        return redirect('/admin/posts/bestseller');
    }

    public function destroy(string $id)
    {
        $bestseller = BestSeller::findOrFail($id);

        // Hapus cover jika ada
        if ($bestseller->cover && file_exists($bestseller->cover)) {
            unlink($bestseller->cover);
        }

        $bestseller->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/admin/posts/bestseller');
    }
}
