@extends('layouts.app')

@section('title', 'Beasiswa')

@section('content')

    <h1 class="text-2xl font-bold text-center mt-[60px] text-gray-100">Pilihan Beasiswa</h1>

    


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
            } else {
                // Jika tidak, sembunyikan elemen beasiswa
                document.getElementById('select_beasiswa').style.display = 'none';
            }
        }

        // Menambahkan event listener untuk memanggil fungsi changeLastIPK() saat opsi dipilih
        document.getElementById('select_semester').addEventListener('change', changeLastIPK);


        console.log(ipk);
    </script>
@stop
