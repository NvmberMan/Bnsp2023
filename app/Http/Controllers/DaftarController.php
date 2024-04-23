<?php

namespace App\Http\Controllers;

use App\Models\BeasiswaModel;
use App\Models\DaftarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (!$request->has('beasiswa')) {
            return Redirect()->route("beasiswa.index");
        }

        $beasiswadata = BeasiswaModel::get();
        return view('daftar', compact('beasiswadata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $daftar = new DaftarModel();

        $daftar->fill($request->all());
        $daftar->status_ujian = "Belum di verifikasi";
        $daftar->save();

        $daftarId = $daftar->id;
        
        return redirect()->route("hasil.index", ["id" => $daftarId]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
