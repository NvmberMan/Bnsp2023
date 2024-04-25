@extends('layouts.app')

@section('title', 'Beasiswa')

@section('content')


    <div class="w-full text-gray-200 h-[80vh] flex flex-col  justify-center items-center gap-2">
        <h1 class="text-2xl font-bold text-center mb-3  text-gray-100 ">Pilihan Beasiswa</h1>
        <div class="flex">
            <div class="flex  gap-2">
                <div onclick="changeDir('/daftar?beasiswa=akademik')"
                    class="border-b-2 border-blue-200 cursor-pointer w-[300px] bg-blue-900 transition-colors hover:bg-blue-700 flex justify-center items-center h-[150px] text-lg font-bold">
                    Akademik
                </div>
                <div onclick="changeDir('/daftar?beasiswa=non+akademik')"
                    class="border-b-2 border-blue-200 cursor-pointer w-[300px] bg-blue-900 transition-colors hover:bg-blue-700 flex justify-center items-center h-[150px] text-lg font-bold">
                    Non Akademik
                </div>
            </div>
        </div>
        <p class="mt-8" style="width: 600px"><span class="font-bold"> Beasiswa Akademik</span> adalah bantuan biaya pendidikan yang diberikan dan ditujukan bagi mahasiswa yang sedang menjalani masa studi kuliah program diploma dan sarjana di berbagai perguruan tinggi baik negeri maupun swasta di Indonesia</p>
        <p style="width: 600px"><span class="font-bold"> Beasiswa Non Akademik</span> adalah jenis bantuan keuangan yang diberikan kepada mahasiswa yang tidak didasarkan pada prestasi akademik mereka. Ini berarti penerima beasiswa tidak dipilih berdasarkan nilai atau pencapaian akademik seperti IPK tinggi.</p>
    </div>


    <script>
        function changeDir(url){
            window.location = url;
        }
    </script>
@stop
