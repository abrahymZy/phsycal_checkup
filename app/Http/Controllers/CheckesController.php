<?php

namespace App\Http\Controllers;

use App\Models\checkes;
use App\Models\sickest;
use App\Models\simples;
use Illuminate\Http\Request;

class CheckesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $check = checkes::all();
        return view('Checkes.index', ['check' => $check]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $simple = simples::all();
        $sick = sickest::all();
        return view('Checkes.create',['simple'=>$simple,'sick'=>$sick]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valedate = $request->validate(
            [
                "type_checkup" => "string|required",
                "date" => 'date|required',
                'simple_id' => 'integer|required',
                'sik_id' => 'integer|required'
            ]
        );

        checkes::create($valedate);
        return redirect()->route('checkup.index')->with("success", "");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $check = checkes::find($id);
        return view('Checkes.show', ['check' => $check]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $check = checkes::find($id);
        $simple = simples::all();
        $sick = sickest::all();
        return view('Checkes.edit', ['check' => $check,'simple'=>$simple,'sick'=>$sick]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $valedate = $request->validate(
            [
                "type_checkup" => "string|required",
                "date" => 'date|required',
                'simple_id' => 'integer|required',
                'sik_id' => 'integer|required'
            ]
        );

        $check = checkes::find($id);
        $check->update($valedate);
        return redirect()->route('checkup.index')->with("success", "");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        checkes::find($id)->delete();
        return redirect()->route('checkup.index')->with("success", "");

    }
}
