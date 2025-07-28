<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $motor = [
            ['id' => 1, 'name' => 'Motor Yamaha', 'price' => 20000000],
            ['id' => 2, 'name' => 'Motor Honda', 'price' => 12000000],
            ['id' => 3, 'name' => 'Motor Suzuki', 'price' => 90000000],
            ['id' => 4, 'name' => 'Motor Kawasaki', 'price' => 100000000],
            ['id' => 5, 'name' => 'Motor Ducati', 'price' => 12000000],
        ];
        return view('welcome', compact('motor'));
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
        //
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
