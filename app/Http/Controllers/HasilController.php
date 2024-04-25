<?php

namespace App\Http\Controllers;

use App\Models\DaftarModel;
use Illuminate\Http\Request;

class HasilController extends Controller
{

    //menampilkan halaman hasil
    public function index(Request $request)
    {
        //mendapatkan id dari request sebelumnya
        $daftarId = $request->input('id');
        if(!$daftarId) //mengecek user tidak membawa id
            return redirect()->route('index'); //redirect ke home

        $hasil = DaftarModel::where("id", $daftarId)->first(); //mendapatkan data hasil by id
        $hasil_semua = DaftarModel::get();
        return view("hasil", compact('hasil', 'hasil_semua'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
