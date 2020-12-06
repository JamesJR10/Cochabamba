<?php

namespace App\Http\Controllers;

use App\Models\Cochabamba;
use App\Models\ComenRest;
use Illuminate\Http\Request;

class ComenRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cochabamba = Cochabamba::all();
      return view('comentario.create', compact('cochabamba'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'calificacion' => 'required',
        'comentario' => 'required',
        'idUser' => 'required',
        'idLocal' => 'required'
      ]);
      ComenRest::create([
        'calificacion' => request('calificacion'),
        'comentario' => request('comentario'),
        'idUser' => request('idUser'),
        'idLocal' => request('idLocal')
      ]);
      return redirect()->route('cochabamba.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComenRest  $comenRest
     * @return \Illuminate\Http\Response
     */
    public function show(ComenRest $comenRest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComenRest  $comenRest
     * @return \Illuminate\Http\Response
     */
    public function edit(ComenRest $comenRest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComenRest  $comenRest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComenRest $comenRest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComenRest  $comenRest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComenRest $comenRest)
    {
        //
    }
}
