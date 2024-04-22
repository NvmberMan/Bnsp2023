@extends('layouts.app')

@section('title', 'Beasiswa')

@section('content')

    <h1 class="text-xl text-center text-gray-100" style="margin-top: 100px">Beasiswa berhasil didaftar!</h1>



    <div class="max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-1" >
        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-900 dark:text-gray-200" role="alert">
            <span class="font-medium">Status!</span> Belum di verifikasi
        </div>

        <div class="p-4">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rangga Mulia Tohpati</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Email : ranggamulia.xpro@gmail.com</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">No hp : 0874561154849</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Semester Saat Ini : 1</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">IPK : 3.4</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Piihan Beasiswa : Akademik</p>
        </div>
    </div>


@stop
