@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

<div
    class="bg-gradient-to-tr from-zinc-300 to-white bg-cover bg-center min-h-screen md:min-h-[50vh] pt-10 w-full flex gap-4 justify-between items-center overflow-hidden">
    <div class="flex flex-col gap-4 ps-5 md:ps-25">

        <h1 class="text-5xl text-black font-semibold">
            Welcome to
            <br><span
                class="bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent text-3xl lg:text-7xl inline-block">Baherindo
                Motor</span>
        </h1>
        <p class="text-2xl text-zinc-900">
            Jual beli motor second termurah di Cianjur
        </p>
        <div class="flex gap-5 mt-5">
            <a href="bike"
                class="bg-gradient-to-r from-red-950 to-red-500 hover:to-red-950 text-white px-10 py-2 rounded-full transition duration-300">
                Beli Motor
            </a>
            <a href="car"
                class="bg-gradient-to-r from-zinc-950 to-zinc-700 hover:to-zinc-950 text-white px-10 py-2 rounded-full transition duration-300">
                Beli Mobil
            </a>
        </div>
    </div>

    <img src="{{ asset('asset/harley-davidson-rEPAjhzt7TY-unsplash-Photoroom.png') }}" alt=""
        class="hidden md:block object-cover w-1/2 h-3/2">

</div>

@section('content')

    <div class="flex flex-col justify-center md:justify-start items-center md:items-start gap-10">
        <h6
            class="flex gap-4 items-center text-4xl font-semibold bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent">
            Beli motor
            <svg xmlns="http://www.w3.org/2000/svg" class="size-9 text-red-950" fill="currentColor"
                viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path
                    d="M280 80C266.7 80 256 90.7 256 104C256 117.3 266.7 128 280 128L336.6 128L359.1 176.7L264 248C230.6 222.9 189 208 144 208L88 208C74.7 208 64 218.7 64 232C64 245.3 74.7 256 88 256L144 256C222.5 256 287.2 315.6 295.2 392L269.8 392C258.6 332.8 206.5 288 144 288C73.3 288 16 345.3 16 416C16 486.7 73.3 544 144 544C206.5 544 258.5 499.2 269.8 440L320 440C333.3 440 344 429.3 344 416L344 393.5C344 348.4 369.7 308.1 409.5 285.8L421.6 311.9C389.2 335.1 368.1 373.1 368.1 416C368.1 486.7 425.4 544 496.1 544C566.8 544 624.1 486.7 624.1 416C624.1 345.3 566.8 288 496.1 288C485.4 288 475.1 289.3 465.2 291.8L433.8 224L488 224C501.3 224 512 213.3 512 200L512 152C512 138.7 501.3 128 488 128L434.7 128C427.8 128 421 130.2 415.5 134.4L398.4 147.2L373.8 93.9C369.9 85.4 361.4 80 352 80L280 80zM445.8 364.4L474.2 426C479.8 438 494 443.3 506 437.7C518 432.1 523.3 417.9 517.7 405.9L489.2 344.3C491.4 344.1 493.6 344 495.9 344C535.7 344 567.9 376.2 567.9 416C567.9 455.8 535.7 488 495.9 488C456.1 488 423.9 455.8 423.9 416C423.9 395.8 432.2 377.5 445.7 364.4zM144 488C104.2 488 72 455.8 72 416C72 376.2 104.2 344 144 344C175.3 344 202 364 211.9 392L144 392C130.7 392 120 402.7 120 416C120 429.3 130.7 440 144 440L211.9 440C202 468 175.3 488 144 488z" />
            </svg>
        </h6>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">

            @foreach ($motor->take(5) as $m)
                <a href="{{ route('motor.show', $m->id) }}"
                    class="w-full h-fit border border-zinc-400 rounded-xl hover:shadow-md hover:scale-105 transition">
                    <img src="{{ asset('storage/' . $m['gambar_motor']) }}" alt="motor img"
                        class="w-full aspect-square object-cover bg-zinc-300 rounded-t-xl">
                    <div class="p-5 flex flex-col gap-5">
                        <div>
                            <h5 class="flex flex-col text-xl font-semibold text-red-500 truncate">{{ $m['nama_motor'] }}
                            </h5>
                            <div class="flex gap-2">
                                <span class="text-black text-base font-semibold">({{ $m['tahun_motor'] }})</span>
                                |
                                <p class="font-semibold">{{ $m['km_motor'] }}km</p>
                            </div>
                        </div>
                        <h5 class="text-xl font-semibold">{{ $m['harga_motor'] }} Rp</h5>
                    </div>
                </a>
            @endforeach

        </div>

        <a href="bike"
            class="hover:bg-red-700 text-red-600 hover:text-white outline px-10 py-2 rounded-md transition duration-300">
            Lihat lebih banyak motor
        </a>
    </div>

    <div class="flex flex-col justify-center md:justify-start items-center md:items-start gap-10">
        <h6
            class="flex gap-4 items-center text-start text-4xl font-semibold bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent">
            Beli Mobil
            <svg xmlns="http://www.w3.org/2000/svg" class="size-9 text-red-950" fill="currentColor"
                viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path
                    d="M147 170.7L117.2 256L240.1 256L240.1 160L162.2 160C155.4 160 149.3 164.3 147.1 170.7zM48.6 257.9L86.5 149.6C97.8 117.5 128.1 96 162.1 96L360 96C385.2 96 408.9 107.9 424 128L520.2 256.3C587.1 260.5 640 316.1 640 384L640 400C640 435.3 611.3 464 576 464L559.6 464C555.6 508.9 517.9 544 472 544C426.1 544 388.4 508.9 384.4 464L239.7 464C235.7 508.9 198 544 152.1 544C106.2 544 68.5 508.9 64.5 464L64.1 464C28.8 464 .1 435.3 .1 400L.1 320C.1 289.9 20.8 264.7 48.7 257.9zM440 256L372.8 166.4C369.8 162.4 365 160 360 160L288 160L288 256L440 256zM152 496C174.1 496 192 478.1 192 456C192 433.9 174.1 416 152 416C129.9 416 112 433.9 112 456C112 478.1 129.9 496 152 496zM512 456C512 433.9 494.1 416 472 416C449.9 416 432 433.9 432 456C432 478.1 449.9 496 472 496C494.1 496 512 478.1 512 456z" />
            </svg>
        </h6>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">

            @foreach ($mobil->take(5) as $m)
                <a href="{{ route('motor.show', $m->id) }}"
                    class="w-full h-fit border border-zinc-400 rounded-xl hover:shadow-md hover:scale-105 transition">
                    <img src="{{ asset('storage/' . $m['gambar_mobil']) }}" alt="motor img"
                        class="w-full aspect-square object-cover bg-zinc-300 rounded-t-xl">
                    <div class="p-5 flex flex-col gap-5">
                        <div>
                            <h5 class="flex flex-col text-xl font-semibold text-red-500 truncate">{{ $m['nama_mobil'] }}
                            </h5>
                            <div class="flex gap-2">
                                <span class="text-black text-base font-semibold">({{ $m['tahun_mobil'] }})</span>
                                |
                                <p class="font-semibold">{{ $m['km_mobil'] }}km</p>
                            </div>
                        </div>
                        <h5 class="text-xl font-semibold">{{ $m['harga_mobil'] }} Rp</h5>
                    </div>
                </a>
            @endforeach

        </div>

        <a href="bike"
            class="hover:bg-red-700 text-red-600 hover:text-white outline px-10 py-2 rounded-md transition duration-300">
            Lihat lebih banyak mobil
        </a>
    </div>
@endsection

@section('footer')
