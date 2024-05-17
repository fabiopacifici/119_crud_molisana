<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePastaRequest;
use App\Http\Requests\UpdatePastaRequest;
use App\Models\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Pasta::all());
        return view('pastas.index', ['pastas' => Pasta::orderByDesc('id')->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pastas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePastaRequest $request)
    {
        //dd($request->all());

        // validate the user inputs

        $val_data = $request->validated();

        Pasta::create($val_data);

        // pattern POST->redirect->GET
        return to_route('pastas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasta $pasta)
    {
        return view('pastas.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasta $pasta)
    {
        return view('pastas.edit', compact('pasta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePastaRequest $request, Pasta $pasta)
    {
        //dd($request->all());

        // validate the data
        $val_data = $request->validated();

        //dd($val_data);
        $pasta->update($val_data);

        return to_route('pastas.show', $pasta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasta $pasta)
    {

        //dd($id);
        //$pasta = Pasta::find($id);
        $pasta->delete();

        return redirect()->back();
    }
}
