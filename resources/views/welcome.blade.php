@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

<div
    class="bg-gradient-to-tr from-zinc-300 to-white
    bg-cover bg-center h-1/3 w-full mt-13 flex flex-col gap-4 justify-center align-center">
    <h1 class="text-5xl text-black font-semibold text-center">
        Welcome to <span
            class="bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent inline-block">Baherindo
            Motor</span>
    </h1>
    <p class="text-center text-xl text-zinc-900">
        Jual beli motor second termurah di Cianjur
    </p>
</div>

@section('content')
    <div class="space-y-2">

        <div class="justify-self-center space-y-20">

            <div class="space-y-10">
                <h6
                    class="flex gap-4 items-center text-4xl font-semibold text-center justify-self-center bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent">
                    Beli motor
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-9 text-red-950" fill="currentColor"
                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M280 80C266.7 80 256 90.7 256 104C256 117.3 266.7 128 280 128L336.6 128L359.1 176.7L264 248C230.6 222.9 189 208 144 208L88 208C74.7 208 64 218.7 64 232C64 245.3 74.7 256 88 256L144 256C222.5 256 287.2 315.6 295.2 392L269.8 392C258.6 332.8 206.5 288 144 288C73.3 288 16 345.3 16 416C16 486.7 73.3 544 144 544C206.5 544 258.5 499.2 269.8 440L320 440C333.3 440 344 429.3 344 416L344 393.5C344 348.4 369.7 308.1 409.5 285.8L421.6 311.9C389.2 335.1 368.1 373.1 368.1 416C368.1 486.7 425.4 544 496.1 544C566.8 544 624.1 486.7 624.1 416C624.1 345.3 566.8 288 496.1 288C485.4 288 475.1 289.3 465.2 291.8L433.8 224L488 224C501.3 224 512 213.3 512 200L512 152C512 138.7 501.3 128 488 128L434.7 128C427.8 128 421 130.2 415.5 134.4L398.4 147.2L373.8 93.9C369.9 85.4 361.4 80 352 80L280 80zM445.8 364.4L474.2 426C479.8 438 494 443.3 506 437.7C518 432.1 523.3 417.9 517.7 405.9L489.2 344.3C491.4 344.1 493.6 344 495.9 344C535.7 344 567.9 376.2 567.9 416C567.9 455.8 535.7 488 495.9 488C456.1 488 423.9 455.8 423.9 416C423.9 395.8 432.2 377.5 445.7 364.4zM144 488C104.2 488 72 455.8 72 416C72 376.2 104.2 344 144 344C175.3 344 202 364 211.9 392L144 392C130.7 392 120 402.7 120 416C120 429.3 130.7 440 144 440L211.9 440C202 468 175.3 488 144 488z" />
                    </svg>
                </h6>

                <div class="grid grid-cols-5 gap-5">

                    @foreach ($motor as $m)
                        <div
                            class="bg-white w-full h-fit border border-zinc-400 rounded-xl shadow-md hover:scale-105 transition">
                            <img src="{{ asset('storage/' . $m['gambar_motor']) }}" alt="motor img"
                                class="w-full aspect-square object-cover bg-zinc-300 rounded-t-xl">
                            <div class="p-5 flex flex-col gap-5">
                                <div>
                                    <h5 class="text-xl font-semibold text-red-500">{{ $m['nama_motor'] }} <span
                                            class="text-black text-base">({{ $m['tahun_motor'] }})</span></h5>
                                    <p class="font-semibold">{{ $m['km_motor'] }}km</p>
                                </div>
                                <h5 class="text-xl font-semibold">{{ $m['harga_motor'] }} Rp</h5>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


        </div>
    </div>
@endsection

@section('footer')
