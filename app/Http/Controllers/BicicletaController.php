<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bicicleta;

class BicicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('bicicletas.index', [
            'bicicletas' => Bicicleta::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('bicicletas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $bicicleta = new Bicicleta($request->all());
        $bicicleta->save();
        return redirect()->route('bicicletas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bicicleta $bicicleta)
    {
        //
        return view('bicicletas.show', [
            'bicicleta' => $bicicleta
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bicicleta $bicicleta)
    {
        //
        return view('bicicletas.edit', [
            'bicicleta' => $bicicleta
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bicicleta $bicicleta)
    {
        //
       /*  dd($request->all()); */
        $bicicleta->update($request->all());
        return redirect()->route('bicicletas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicicleta $bicicleta)
    {
        //
        $bicicleta->delete();
        return back();
    }
}
