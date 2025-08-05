<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mobil.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama_mobil" => "required|string",
            "harga_mobil" => "required|numeric",
            "km_mobil" => "required|integer",
            "tahun_mobil" => "required|integer",
            "gambar_mobil" => "required|image|mimes:jpg,jpeg,png"
        ]);

        if ($request->hasFile('gambar_mobil')){
            $path = $request->file('gambar_mobil')->store('images','public');
            $validatedData['gambar_mobil'] = $path;
        };

        Mobil::create($validatedData);
        return redirect('/car');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        //
    }
}
