@extends('layouts.app')

@section('title', 'Beasiswa')

@section('content')
    
    <h1 class="text-2xl font-bold text-center mt-[60px] text-gray-100">Daftar Beasiswa</h1>

    <form class="max-w-md mx-auto mt-5" action="{{route('daftar.store')}}" method="post">
        @csrf
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="nama" id="floating_email"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="floating_email"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukkan
                Nama</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="email" name="email" id="floating_password"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="floating_password"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukkan
                Email</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="number" name="nomor_hp" id="floating_repeat_password"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="floating_repeat_password"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor
                Hp
            </label>
        </div>
        <div class="grid md:grid-cols-2 md:gap-2">
            <div class="relative z-0 w-full group">
                <select id="select_semester" required name="semester"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg border-s-gray-100 dark:border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Semester Saat Ini</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="relative z-0 w-full group">
                <input type="text" id="disabled-input" aria-label="disabled input" name="ipk"
                    class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="IPK Terakhir" readonly>
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group" id="select_beasiswa" style="display: none;">
            <select id="select_beasiswa" required name="pilihan_beasiswa"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg border-s-gray-100 dark:border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected>Pilihan Beasiswa</option>
                @foreach ($beasiswadata as $row)
                    <option value="{{$row->nama_beasiswa}}">{{$row->nama_beasiswa}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="relative z-0 w-full mb-5 group">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Berkas
                Syarat</label>
            <input required
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG (MAX.
                2mb).</p>

        </div>
        <button type="submit" id="daftar_button" disabled
            class="text-white disabled:bg-gray-800 disabled:cursor-not-allowed disabled:pointer-events-none bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Daftar</button>
        <button type="button"
            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Cancel</button>
    </form>


    <script>
        const ipk = [];

        function generateRandomIPK() {
            return (Math.random() * (4.0 - 2.0) + 2.0).toFixed(2);
        }

        for (let i = 0; i < 9; i++) {
            ipk.push(generateRandomIPK());
        }


        // Fungsi untuk mengubah nilai input IPK terakhir
        function changeLastIPK() {
            const selectElement = document.getElementById('select_semester');
            const selectedIndex = selectElement.value;

            // Mengambil nilai IPK dari array berdasarkan indeks yang dipilih
            const selectedIPK = selectedIndex != "" ? ipk[selectedIndex] : "IPK Terakhir";

            // Mengubah nilai input IPK terakhir sesuai dengan yang dipilih
            document.getElementById('disabled-input').value = selectedIPK;

            // Mengecek apakah IPK terpilih di atas 3
            if (selectedIPK > 3) {
                // Jika ya, tampilkan elemen beasiswa
                document.getElementById('select_beasiswa').style.display = 'block';
                document.getElementById('daftar_button').disabled  = false;
            } else {
                // Jika tidak, sembunyikan elemen beasiswa
                document.getElementById('select_beasiswa').style.display = 'none';
                document.getElementById('daftar_button').disabled  = true;

            }
        }

        // Menambahkan event listener untuk memanggil fungsi changeLastIPK() saat opsi dipilih
        document.getElementById('select_semester').addEventListener('change', changeLastIPK);


        console.log(ipk);
    </script>
@stop
