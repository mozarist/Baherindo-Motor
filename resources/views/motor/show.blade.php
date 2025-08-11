@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')


@section('content')
    <div class="space-y-2">

        <div class="justify-self-center self-center space-y-20 w-full h-full">


            <div class="flex gap-5 bg-white w-full h-full border border-zinc-400 rounded-xl shadow-md">
                <img src="{{ asset('storage/' . $motor['gambar_motor']) }}" alt="motor img"
                    class="w-1/3 object-cover bg-zinc-300 rounded-l-xl">
                <div class="flex-3 p-5 flex flex-col justify-between gap-5">
                    <div class="space-y-5">
                        <h5 class="text-4xl font-semibold text-red-500">
                            {{ $motor['nama_motor'] }}
                        </h5>
                        <div class="space-y-2 text-xl font-semibold">
                            <h6>Tahun: {{ $motor['tahun_motor'] }}</h6>
                            <p>Jarak Tempuh: {{ $motor['km_motor'] }}km</p>
                        </div>
                        <h5 class="text-3xl font-semibold border-t border-zinc-500 pt-5">{{ $motor['harga_motor'] }} Rp</h5>
                    </div>

                    <div class="flex gap-2 items-center">
                        <a href="">
                            <button
                                class="w-full bg-gradient-to-r from-green-950 to-emerald-600 hover:from-green-800 hover:to-emerald-500 px-15 py-2 rounded-xl text-white font-semibold transition">
                                Order Via WhatsApp
                            </button>
                        </a>
                        <form action="{{ route('motor.destroy', $motor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="flex-1 w-full bg-gradient-to-r from-red-800 to-red-500 hover:from-red-950 hover:to-red-900 px-5 py-2 rounded-xl text-white font-semibold transition">
                                Hapus Data
                            </button>
                        </form>
                        <a href="{{ route('motor.edit', $motor->id) }}">
                            <button
                                class="flex-1 w-full bg-gradient-to-r from-red-800 to-red-500 hover:from-red-950 hover:to-red-900 px-5 py-2 rounded-xl text-white font-semibold transition">
                                Edit Data
                            </button>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection

@section('footer')
