@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
    <div class="space-y-2">
        
        <h1 class="text-5xl font-semibold text-center flex gap-3 items-center justify-self-center">Welcome to <span
                class="flex gap-2 items-center bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent w-fit">Baherindo
                Motor
                <svg xmlns="http://www.w3.org/2000/svg" class="size-12 text-red-950" fill="currentColor"
                    viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M190.1 379.1C190.1 405 168.9 426.2 143 426.2C117.1 426.2 96 405 96 379.1C96 353.2 117.2 332 143.1 332L190.2 332L190.2 379.1zM213.8 379.1C213.8 353.2 235 332 260.9 332C286.8 332 308 353.2 308 379.1L308 496.9C308 522.8 286.8 544 260.9 544C235 544 213.8 522.8 213.8 496.9L213.8 379.1zM260.9 190.1C235 190.1 213.8 168.9 213.8 143C213.8 117.1 235 96 260.9 96C286.8 96 308 117.2 308 143.1L308 190.2L260.9 190.2zM260.9 213.8C286.8 213.8 308 235 308 260.9C308 286.8 286.8 308 260.9 308L143.1 308C117.2 308 96 286.8 96 260.9C96 235 117.2 213.8 143.1 213.8L260.9 213.8zM449.9 260.9C449.9 235 471.1 213.8 497 213.8C522.9 213.8 544 235 544 260.9C544 286.8 522.8 308 496.9 308L449.8 308L449.8 260.9zM426.2 260.9C426.2 286.8 405 308 379.1 308C353.2 308 332 286.8 332 260.9L332 143.1C332 117.2 353.2 96 379.1 96C405 96 426.2 117.2 426.2 143.1L426.2 260.9zM379.1 449.9C405 449.9 426.2 471.1 426.2 497C426.2 522.9 405 544 379.1 544C353.2 544 332 522.8 332 496.9L332 449.8L379.1 449.8zM379.1 426.2C353.2 426.2 332 405 332 379.1C332 353.2 353.2 332 379.1 332L496.9 332C522.8 332 544 353.2 544 379.1C544 405 522.8 426.2 496.9 426.2L379.1 426.2z" />
                </svg>
            </span></h1>
        <p class="text-center text-xl">
            Jual beli motor second termurah di Cianjur
        </p>

        <div class="py-10 justify-self-center">

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
                        <div class="bg-white w-full h-fit border border-zinc-400 rounded-xl shadow-md hover:scale-105 transition">
                            <img src="{{ $m['gambar_motor'] }}" alt="motor img"
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
