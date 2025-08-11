@extends('layouts.main')

@section('title', 'Baherindo Motor Admin')

@section('content')

    <h1 class="text-5xl font-semibold text-center">Edit Produk <span
            class="bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent inline-block border-b-3 border-red-800">Baherindo
            Motor</span>
    </h1>

    <div class="w-3xl bg-white shadow-md rounded-xl p-5 self-center justify-self-center border border-zinc-300">

        <form action="{{ route('motor.update', $motor->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-base font-semibold">Nama Motor</label>
                <input type="text" for="nama" name="nama_motor" class="mt-1 py-2 w-full border-b border-gray-300"
                    placeholder="Contoh: Honda Beat" value="{{ $motor->nama_motor }}" required>
            </div>

            <div>
                <label class="block text-base font-semibold">Tahun Motor</label>
                <input type="number" for="year" name="tahun_motor" class="mt-1 py-2 w-full border-b border-gray-300"
                    placeholder="Contoh: 2018" value="{{ $motor->tahun_motor }}" required>
            </div>

            <div>
                <label class="block text-base font-semibold">Kilometer</label>
                <input type="number" for="kilometer" name="km_motor" class="mt-1 py-2 w-full border-b border-gray-300"
                    placeholder="Contoh: 25000" value="{{ $motor->km_motor }}" required>
            </div>

            <div>
                <label class="block text-base font-semibold">Harga (Rp)</label>
                <input type="number" for="price" name="harga_motor" class="mt-1 py-2 w-full border-b border-gray-300"
                    placeholder="Contoh: 13000000" value="{{ $motor->harga_motor }}" required>
            </div>


            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-red-950 to-red-500 text-white py-2 px-4 rounded-md hover:from-red-800 hover:to-red-400 transition">Simpan</button>
            </div>
        </form>
    </div>

@endsection

@section('footer')
