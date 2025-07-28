@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
    <div class="space-y-5">
        <h1 class="text-5xl font-semibold text-center">Welcome to <span
                class="bg-gradient-to-t from-red-950 to-red-500 bg-clip-text text-transparent inline-block border-b-3 border-red-800">Baherindo
                Motor</span></h1>
        <p class="text-center text-xl">
            Jual beli motor second termurah di Cianjur
        </p>

        <div class="py-10">

            <div class="relative overflow-x-auto rounded-2xl">
                <table class="w-full text-sm text-left rtl:text-right text-white">
                    <thead class="text-xs uppercase bg-gray-50 bg-gradient-to-t from-red-950 to-red-500">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($motor as $m)
                            <tr class="bg-white border-b bg-zinc-950 border-zinc-800 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-lg text-gray-900 whitespace-nowrap dark:text-white">
                                    <h5>{{ $m['name'] }}</h5>
                                </th>
                                <td class="px-6 py-4 text-lg">
                                    <h5>{{ $m['price'] }}</h5>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

@section('footer')