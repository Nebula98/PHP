<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Array asociativo
        $carros = [
            ["modelo" => "ferrari", "año" => 1990,"rol" => "estudiante"],
            ["modelo" => "Lamborghini", "año" => 1990, "rol" =>"estudiante"],
            ["modelo" => "BMW", "año" => 1990, "rol" => "estudiante"]
            
        ];
        
        return view('carros', compact('carros'));
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
