<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAboutController extends Controller
{
    //

    public function index()
    {
        $data = [
            'title'   => 'Manajemen About',
            'about'  => About::first(),
            'content' => 'admin/about/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request)
    {
        $about = About::first();
        $data = $request->validate([
            'name' => 'required',
            'desc'     => 'required',
            // 'cover'     => 'required',
        ]);


        // Upload cover baru jika ada
        if ($request->hasFile("cover")) {
            // Hapus cover lama jika ada
            if ($about->cover && file_exists($about->cover)) {
                unlink($about->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        } else {
            $data['cover'] = $about->cover;
        }

        $about->update($data);
        Alert::success('Sukses', 'Data berhasil diperbarui');
        return redirect('/admin/about');
    }
}
