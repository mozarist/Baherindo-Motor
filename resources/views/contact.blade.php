@extends('layouts.main')

@section('title', 'Baherindo Motor')

@section('content')
    <div class="space-y-5 pt-25 xl:pt-50">
        <h1 class="text-5xl font-semibold text-center">Hubungi <span
                class="bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent inline-block border-b-3 border-red-800">Kami</span>
        </h1>

        <p class="text-xl text-center">
            Ingin tanya-tanya motor? Butuh rekomendasi motor second terbaik? Tim kami siap membantu Anda dengan ramah dan
            cepat!
        </p>
    </div>
    <div class="my-15 grid grid-cols-1 lg:grid-cols-2 gap-5 xl:px-40">

        <div class="bg-white p-5 rounded-xl border border-zinc-400 space-y-2">
            <h5 class="text-3xl font-semibold">
                Alamat
            </h5>
            <p class="text-xl text-red-500">
                Jl. Cikaret No.123, Cianjur
            </p>
        </div>

        <div class="bg-white p-5 rounded-xl border border-zinc-400 space-y-2">
            <h5 class="text-3xl font-semibold">
                Telepon/WhatsApp
            </h5>
            <p class="text-xl text-red-500">
                0812-3456-7890
            </p>
        </div>

        <div class="bg-white p-5 rounded-xl border border-zinc-400 space-y-2">
            <h5 class="text-3xl font-semibold">
                Email
            </h5>
            <p class="text-xl text-red-500">
                baherindo@gmail.com
            </p>
        </div>

        <div class="bg-white p-5 rounded-xl border border-zinc-400 space-y-2">
            <h5 class="text-3xl font-semibold">
                Jam Buka
            </h5>
            <p class="text-xl text-red-500">
                Senin - Sabtu, 08.00 - 17.00
                |
                Minggu libur, tapi tetap bisa chat!
            </p>
        </div>
    </div>

@endsection

@section('footer')
