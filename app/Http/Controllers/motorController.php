<?php

namespace App\Http\Controllers;

use App\Models\MotorBaherindo;
use Illuminate\Http\Request;

class motorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motor.create');
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
        $request->validate([
            "nama_motor" => "required|string",
            "harga_motor" => "required|numeric",
            "km_motor" => "required|integer",
            "tahun_motor" => "required|integer",
            "gambar_motor" => "required|image|mimes:jpg,jpeg,png"
        ]);

        MotorBaherindo::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
