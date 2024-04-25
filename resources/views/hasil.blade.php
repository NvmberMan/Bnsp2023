@extends('layouts.app')

@section('title', 'Beasiswa')

@section('content')


    <div class="max-w-md mx-auto p-4 border  rounded-lg shadow bg-gray-800 border-gray-700 mt-[70px]">
        <div class="p-4 mb-4 text-sm  rounded-lg  bg-gray-900 text-gray-200" role="alert">
            <span class="font-medium">Status!</span> {{ $hasil->status_ujian }}
        </div>

        <div class="p-4">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $hasil->nama }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-400">Email : {{ $hasil->email }}</p>
            <p class="mb-3 font-normal text-gray-400">No hp : {{ $hasil->nomor_hp }}</p>
            <p class="mb-3 font-normal text-gray-400">Semester Saat Ini : {{ $hasil->semester }}</p>
            <p class="mb-3 font-normal text-gray-400">IPK : {{ $hasil->ipk }}</p>
            <p class="mb-3 font-normal text-gray-400">Piihan Beasiswa : {{ $hasil->pilihan_beasiswa }}</p>
            <a href="{{ asset($hasil->upload) }}" download class="text-gray-300 font-semibold mt-2">Download Berkas</a>
        </div>
    </div>
    <div class="flex justify-center">
        <a href="#table" class="text-sm text-center text-gray-400 " style="margin-top: 10px;">Beasiswa berhasil didaftar!,
            Lihat siswa lainnya</a>
    </div>

    <div id="table" class="relative overflow-x-auto mt-[200px]">
        <table class="w-full text-sm text-left rtl:text-right text-gray-400">
            <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nomor Hp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Semester
                    </th>
                    <th scope="col" class="px-6 py-3">
                        IPK
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Berkas
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hasil_semua as $row)
                    <tr class="  border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                            {{ $row->nama }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $row->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $row->nomor_hp }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $row->semester }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $row->ipk }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ asset($row->upload) }}" style="text-decoration: underline" download>Download
                                link</a>
                                {{-- <img width="100px" src="{{ asset($row->upload)}}" alt=""> --}}

                        </td>
                        <td class="px-6 py-4">
                            <p class="border-2 bg-blue-500 text-white border-blue-200 p-1 rounded"
                                style="width: fit-content">
                                {{ $row->status_ujian }}
                            </p>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


@stop
