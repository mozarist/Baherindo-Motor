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
            ['id' => 1, 'name' => 'Motor Yamaha', 'price' => 20000000, 'year' => 2019, 'km' => 1100, 'img' => 'https://images.unsplash.com/photo-1591637333184-19aa84b3e01f?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
            ['id' => 2, 'name' => 'Motor Honda', 'price' => 12000000, 'year' => 2017, 'km' => 19000, 'img' => 'https://images.unsplash.com/photo-1531327431456-837da4b1d562?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
            ['id' => 3, 'name' => 'Motor Suzuki', 'price' => 90000000, 'year' => 2022, 'km' => 12000, 'img' => 'https://images.unsplash.com/photo-1558981403-c5f9899a28bc?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
            ['id' => 4, 'name' => 'Motor Kawasaki', 'price' => 100000000, 'year' => 2019, 'km' => 10800, 'img' => 'https://images.unsplash.com/photo-1558981033-0f0309284409?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
            ['id' => 5, 'name' => 'Motor Ducati', 'price' => 12000000, 'year' => 2020, 'km' => 1300, 'img' => 'https://images.unsplash.com/photo-1568772585407-9361f9bf3a87?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
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
