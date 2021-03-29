<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;

class DivisionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $divisions = Division::all();
        return view('division.index')->with('divisions', $divisions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('division.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $divisions = new Division();

        $divisions->codigo = $request->get('codigo');
        $divisions->nombre = $request->get('nombre');
        $divisions->municipio = $request->get('municipio');
        $divisions->zona = $request->get('zona');
        $divisions->calle = $request->get('calle');
        $divisions->oficina = $request->get('oficina');

        $divisions->save();

        return redirect('/divisions');
        
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
        $division =Division::find($id);
        return view('division.edit')->with('division',$division);

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
        $division = Division::find($id);

        $division->codigo = $request->get('codigo');
        $division->nombre = $request->get('nombre');
        $division->municipio = $request->get('municipio');
        $division->zona = $request->get('zona');
        $division->calle = $request->get('calle');
        $division->oficina = $request->get('oficina');

        $division->save();

        return redirect('/divisions');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::find($id);
        $division->delete();
        return redirect('/divisions');
    }
}
