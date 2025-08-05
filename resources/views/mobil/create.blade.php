@extends('layouts.main')

@section('title', 'Baherindo Motor Admin')

@section('content')

    <h1 class="text-5xl font-semibold text-center">Tambah Mobil <span
            class="bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent inline-block border-b-3 border-red-800">Baherindo
            Motor</span>
    </h1>

    <div class="w-3xl bg-white shadow-md rounded-xl p-5 self-center justify-self-center">

        <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-base font-semibold">Nama mobil</label>
                <input type="text" for="nama" name="nama_mobil" class="mt-1 py-2 w-full border-b border-gray-300"
                    placeholder="Contoh: Honda Beat" required>
            </div>

            <div>
                <label class="block text-base font-semibold">Foto</label>
                <input type="file" for="image" name="gambar_mobil" class="mt-1 py-2 w-full border-b border-gray-300 text-zinc-500"
                    accept=".jpg,.jpeg,.png,.svg">
            </div>

            <div>
                <label class="block text-base font-semibold">Tahun mobil</label>
                <input type="number" for="year" name="tahun_mobil" class="mt-1 py-2 w-full border-b border-gray-300"
                    placeholder="Contoh: 2018" required>
            </div>

            <div>
                <label class="block text-base font-semibold">Kilometer</label>
                <input type="number" for="kilometer" name="km_mobil" class="mt-1 py-2 w-full border-b border-gray-300"
                    placeholder="Contoh: 25000" required>
            </div>

            <div>
                <label class="block text-base font-semibold">Harga (Rp)</label>
                <input type="number" for="price" name="harga_mobil" class="mt-1 py-2 w-full border-b border-gray-300"
                    placeholder="Contoh: 13000000" required>
            </div>


            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-red-950 to-red-500 text-white py-2 px-4 rounded-md hover:from-red-800 hover:to-red-400 transition">Simpan</button>
            </div>
        </form>
    </div>

@endsection

@section('footer')
