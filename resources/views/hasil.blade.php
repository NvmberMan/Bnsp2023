@extends('layouts.app')

@section('title', 'Beasiswa')

@section('content')

    <h1 class="text-xl text-center text-gray-100" style="margin-top: 100px">Beasiswa berhasil didaftar!</h1>



    <div class="max-w-md mx-auto p-4 border  rounded-lg shadow bg-gray-800 border-gray-700 mt-1" >
        <div class="p-4 mb-4 text-sm  rounded-lg  bg-gray-900 text-gray-200" role="alert">
            <span class="font-medium">Status!</span> {{$hasil->status_ujian}}
        </div>

        <div class="p-4">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">{{$hasil->nama}}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-400">Email : {{$hasil->email}}</p>
            <p class="mb-3 font-normal text-gray-400">No hp : {{$hasil->nomor_hp}}</p>
            <p class="mb-3 font-normal text-gray-400">Semester Saat Ini : {{$hasil->semester}}</p>
            <p class="mb-3 font-normal text-gray-400">IPK : {{$hasil->ipk}}</p>
            <p class="mb-3 font-normal text-gray-400">Piihan Beasiswa : {{$hasil->pilihan_beasiswa}}</p>
            <a href="{{ asset($hasil->upload) }}" download class="text-gray-300 font-semibold mt-2">Download Berkas</a>
        </div>
    </div>


@stop
