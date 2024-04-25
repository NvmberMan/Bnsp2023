<?php

namespace App\Http\Controllers;

use App\Models\BeasiswaModel;
use App\Models\DaftarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DaftarController extends Controller
{
    //Menampilkan view dari halaman daftar
    public function index(Request $request)
    {
        //melakukan pencekan apakah dia sudah memilih tipe beasiswa
        if (!$request->has('beasiswa')) {
            return Redirect()->route("index");
        }
        
        //mengamil data dari table beasiswa
        $beasiswadata = BeasiswaModel::get();
        return view('daftar', compact('beasiswadata'));
    }

    public function create()
    {
        //
    }

    //fungsi untuk memasukkan data kedalam table daftar
    public function store(Request $request)
    {
        $daftar = new DaftarModel();

        //mengisi semua column dengan request yang ada
        $daftar->fill($request->all());
        $daftar->status_ujian = "Belum di verifikasi";

        //mengecek apakah ada file upload
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $daftar->upload = 'uploads/' . $filename;
        }

        $daftar->save();

        $daftarId = $daftar->id;
        
        //mengarahkan ke function hasil.index dengan membawa id
        return redirect()->route("hasil.index", ["id" => $daftarId]);
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
