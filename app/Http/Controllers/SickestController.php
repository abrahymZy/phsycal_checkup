<?php

namespace App\Http\Controllers;

use App\Models\sickest;
use Illuminate\Http\Request;

class SickestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $sick = sickest::all();
        return view('Sickest.index',['sick'=>$sick]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Sickest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->validate( 
   [
    "name"=> "string|required",
    "age"=> "integer|required",
   ]);
   sickest::create($validate);
   return redirect()->route('sickest.index')->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sick = sickest::find($id);
        return view('Sickest.show',["sick"=>$sick]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sick = sickest::find($id);
        return view('Sickest.edit',["sick"=>$sick]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate=$request->validate( 
   [
    "name"=> "string|required",
    "age"=> "required|integer"
   ]);

   $sick = sickest::find($id);
   $sick->update($validate);
   return redirect()->route("sickest.index")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        sickest::find($id)->delete();
        return redirect()->route('sickest.index')->with("success","");
    }
}
