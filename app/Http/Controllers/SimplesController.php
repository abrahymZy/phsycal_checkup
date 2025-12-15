<?php

namespace App\Http\Controllers;

use App\Models\simples;
use Illuminate\Http\Request;

class SimplesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $simples = simples::all();
        return view('Simples.index', ['simples' => $simples]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Simples.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                "name" => "string|required",
            ]
        );
        simples::create($validate);
        return redirect()->route("simples.index")->with("success", "");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $simple = simples::find($id);
        return view('Simples.show', ["simple" => $simple]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $simple = simples::find($id);
        return view('Simples.edit', ["simple" => $simple]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate(
            [
                "name" => "string|required",
            ]
        );

        $simple = simples::find($id);
        $simple->update($validate);
        return redirect()->route("simples.index")->with("success", "");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        simples::find($id)->delete();
        return redirect()->route('simples.index')->with("success", "");
    }
}
