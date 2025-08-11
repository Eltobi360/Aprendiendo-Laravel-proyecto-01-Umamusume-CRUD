<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umamusume;

class UmamusumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umamusumes = Umamusume::latest()->get();
        return view('umamusumes.index',compact('umamusumes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('umamusumes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
        'nombre' => 'required',
        'velocidad' => 'required|integer',
        'stamina' => 'required|integer',
        'imagen' => 'nullable|mimes:jpg,jpeg,png,webp|max:5120'
    ]);

    $path = null;
    if ($request->hasFile('imagen')) {
        $path = $request->file('imagen')->store('umamusumes', 'public');
    }

    $umamusume = Umamusume::create([
        'nombre' => $request->nombre,
        'velocidad' => $request->velocidad,
        'stamina' => $request->stamina,
        'imagen' => $path,
    ]);

    if ($request->ajax()) {
        $html = view('umamusumes._tarjeta', ['umamusume' => $umamusume])->render();
        return response()->json(['html' => $html]);
    }

    return redirect()->route('umamusumes.index');



        // $request->validate([
        //     'nombre'=>'required',
        //     'velocidad'=>'required|integer',
        //     'stamina'=>'required|integer',
        //     'imagen'=>'nullable|mimes:jpg,jpeg,png,webp|max:5120'
        // ]);
        
        // $path=null;
        // if($request->hasFile('imagen')){
        //     $path = $request->file('imagen')->store('umamusumes','public');
        // }
        // Umamusume::create([
        //     'nombre' => $request->nombre,
        //     'velocidad'=> $request->velocidad,
        //     'stamina'=> $request->stamina,
        //     'imagen'=> $path,
        // ]);
        
        // return redirect()->route('umamusumes.index');
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
    public function edit(Umamusume $umamusume)
    {
        return view('umamusumes.edit',compact('umamusume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Umamusume $umamusume)
    {
        $request->validate([
            'nombre'=> 'required',
            'velocidad'=>'required|integer',
            'stamina'=>'required|integer',
            'imagen'=>'nullable|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        //condicional para verificar la subida de la nueva imagen 

        if($request->hasFile('imagen')){
            $path = $request->file('imagen')->store('umamusumes','public');
            $umamusume->imagen=$path;
        }

        $umamusume->nombre =$request->nombre;
        $umamusume->velocidad =$request->velocidad;
        $umamusume->stamina =$request->stamina;

        $umamusume->save();

        if ($request->ajax()) {
        $html = view('umamusumes._tarjeta', ['umamusume' => $umamusume])->render();
        return response()->json([
            'id' => $umamusume->id,
            'html' => $html
        ]);
    }

        return redirect()->route('umamusumes.index')->with('success','personaje actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Umamusume $umamusume)
    {
        $umamusume->delete();
        
         if (request()->ajax()) {
        return response()->json(['message' => 'Personaje eliminado correctamente.']);
    }
        return redirect()->route('umamusumes.index')->with('success','Personaje eliminado correctamente.');
    }
}
