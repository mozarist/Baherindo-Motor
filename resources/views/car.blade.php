@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
    <div class="space-y-2 mt-25">

        <div class="justify-self-center space-y-20">


            <div class="space-y-10">
                <h6
                    class="flex gap-4 items-center text-4xl font-semibold text-center justify-self-center bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent">
                    Beli mobil
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="size-9 text-red-950" fill="currentColor"
                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M147 170.7L117.2 256L240.1 256L240.1 160L162.2 160C155.4 160 149.3 164.3 147.1 170.7zM48.6 257.9L86.5 149.6C97.8 117.5 128.1 96 162.1 96L360 96C385.2 96 408.9 107.9 424 128L520.2 256.3C587.1 260.5 640 316.1 640 384L640 400C640 435.3 611.3 464 576 464L559.6 464C555.6 508.9 517.9 544 472 544C426.1 544 388.4 508.9 384.4 464L239.7 464C235.7 508.9 198 544 152.1 544C106.2 544 68.5 508.9 64.5 464L64.1 464C28.8 464 .1 435.3 .1 400L.1 320C.1 289.9 20.8 264.7 48.7 257.9zM440 256L372.8 166.4C369.8 162.4 365 160 360 160L288 160L288 256L440 256zM152 496C174.1 496 192 478.1 192 456C192 433.9 174.1 416 152 416C129.9 416 112 433.9 112 456C112 478.1 129.9 496 152 496zM512 456C512 433.9 494.1 416 472 416C449.9 416 432 433.9 432 456C432 478.1 449.9 496 472 496C494.1 496 512 478.1 512 456z" />
                    </svg>
                </h6>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">

                    @foreach ($mobil as $m)
                        <div
                            class="bg-white w-full h-fit border border-zinc-400 rounded-xl shadow-md hover:scale-105 transition">
                            <img src="{{ asset('storage/' . $m['gambar_mobil']) }}" alt="motor img"
                                class="w-full aspect-square object-cover bg-zinc-300 rounded-t-xl">
                            <div class="p-5 flex flex-col gap-5">
                                <div>
                                    <h5 class="text-xl font-semibold text-red-500">{{ $m['nama_mobil'] }} <span
                                            class="text-black text-base">({{ $m['tahun_mobil'] }})</span></h5>
                                    <p class="font-semibold">{{ $m['km_mobil'] }}km</p>
                                </div>
                                <h5 class="text-xl font-semibold">{{ $m['harga_mobil'] }} Rp</h5>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


        </div>
    </div>
@endsection

@section('footer')
