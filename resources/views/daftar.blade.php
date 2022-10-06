@extends('layouts.main')
@section('main')
<div class="dark:text-white p-5 max-w-4xl px-10 py-6 mx-auto">

    <h1 class="text-4xl font-bold text-black py-10">Halaman Pendaftaran Caleg</h1>

    <form action="{{ route('pendaftaran.store') }}" method="POST">
        <div class="py-3">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="foto">Upload
                Foto</label>
            <input
                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="foto" type="file">

        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">

            <div>
                <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Arif Budiman Arrosyid" required="">
            </div>
            <div>
                <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIK</label>
                <input type="text" id="nik"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="2346234879457" required="">
            </div>
            <div>
                <label for="daerah-pemilihan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Daerah
                    Pemilihan</label>
                <input type="text" id="daerah-pemilihan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Flowbite" required="">
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor
                    Telepon</label>
                <input type="tel" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="081392408350" required="">
            </div>

            <div>
                <label for="tempat-lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat
                    Lahir</label>
                <input type="text" id="tempat-lahir"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Banyumas" required="">
            </div>
            <div>
                <label for="tanggal-lahir"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat Lahir</label>
                <input type="date" id="tanggal-lahir"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="flowbite.com" required="">
            </div>
            <div>
                <label for="jenis-kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis
                    Kelamin</label>
                <input type="text" id="jenis-kelamin"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="L" required="">
            </div>
            <div>
                <label for="agama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agama</label>
                <input type="text" id="agama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Islam" required="">
            </div>
            <div>
                <label for="status-perkawinan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Status Perkawinan</label>
                <input type="text" id="status-perkawinan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Kawin" required="">
            </div>

        </div>
        <div class="mb-6">
            <label for="alamat-ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat
                KTP</label>
            <input type="text" id="alamat-ktp"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Kab. Banyumas, Kec. Purwojati, Desa Klapasawit, RT1 RW1" required="">
        </div>
        <div class="mb-6">
            <label for="alamat-domisili" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat
                Domisili</label>
            <input type="text" id="alamat-domisili"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Kab. Bantul, Kec. Kasihan, Desa Kasihan, RT1 RW1" required="">
        </div>
        <div class="mb-6">
            <label for="pekerjaan"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan</label>
            <input type="text" id="pekerjaan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Dosen" required="">
        </div>
        <div class="mb-6">
            <label for="pendidikan-terakhir"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pendidikan Terakhir</label>
            <input type="text" id="pendidikan-terakhir"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="S1" required="">
        </div>

        <div class="mb-6">
            <label for="sd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SD</label>
            <input type="text" id="sd"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="SD N 1 Bantul" required="">
        </div>
        <div class="mb-6">
            <label for="smp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SMP</label>
            <input type="text" id="smp"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="SMP N 2 Bantul" required="">
        </div>
        <div class="mb-6">
            <label for="sma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SMA</label>
            <input type="text" id="sma"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="SMA N 1 Bantul" required="">
        </div>
        <div class="mb-6">
            <label for="s1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">S1</label>
            <input type="text" id="s1"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Univarsitas Muhammadiyah Purwokerto" required="">
        </div>
        <div class="mb-6">
            <label for="s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">S2</label>
            <input type="text" id="s2"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Univarsitas Muhammadiyah Purwokerto" required="">
        </div>
        <div class="mb-6">
            <label for="s3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">S3</label>
            <input type="text" id="s3"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Univarsitas Muhammadiyah Purwokerto" required="">
        </div>
        <label for="riwayat-diklat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Riwayat
            Diklat</label>
        <textarea id="riwayat-diklat" rows="4"
            class="block p-2.5 w-full text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Riwayat Diklat 1. "></textarea>
        <label for="riwayat-organisasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Riwayat
            Organisasi</label>
        <textarea id="riwayat-organisasi" rows="4"
            class="block p-2.5 w-full text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Riwayat Organisasi 1. "></textarea>
        <label for="riwayat-pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Riwayat
            Pekerjaan</label>
        <textarea id="riwayat-pekerjaan" rows="4"
            class="block p-2.5 w-full text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Riwayat Pekerjaan 1. "></textarea>
        <label for="riwayat-Penghargaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Riwayat
            Penghargaan</label>
        <textarea id="riwayat-Penghargaan" rows="4"
            class="block p-2.5 w-full text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Riwayat Penghargaan 1. "></textarea>



        {{-- <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value=""
                    class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                    required="">
            </div>
            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">I agree with the <a
                    href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
        </div> --}}
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</div>

@endsection
