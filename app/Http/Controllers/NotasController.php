<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('notas.index', compact('notas'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param // \Illuminate\Http\Request  $request
     * @return //\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notas = new Nota();
        $notas->nombre = $request->input('nombre');
        $notas->putuacion = $request->input('putuacion');
        $notas->fecha = $request->input('fecha');
        $notas->save();

        return 'saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
