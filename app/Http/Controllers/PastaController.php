<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        // validate the user inputs

        // create the resource
        // option 1 (extended operations)
        /*  $pasta = new Pasta();
        $pasta->title = $data['title'];
        $pasta->src = $data['src'];
        $pasta->weight = $data['weight'];
        $pasta->type = $data['type'];
        $pasta->cooking_time = $data['cooking_time'];
        $pasta->description = $data['description'];
        $pasta->save(); */

        Pasta::create($data);

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
    public function update(Request $request, Pasta $pasta)
    {
        //dd($request->all());
        $pasta->update($request->all());

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

        return to_route('pastas.index');
    }
}
