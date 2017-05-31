<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use Session;
use App\Http\Requests\CreatePositionRequest;
use App\Http\Requests\UpdatePositionRequest;

class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::paginate(8);
        return view('position.index')->with('positions',$positions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('position.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePositionRequest $request)
    {
        Position::create($request->all());
        Session::flash('save','El registro se a guardado correctamente');
        return redirect()->route('position.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $positions=Position::FindOrFail($id);
      return view('position.show')->with('positions',$positions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $positions = Position::FindOrFail($id);
        return view('position.edit')
            ->with('positions',$positions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePositionRequest $request, $id)
    {
        $positions = Position::FindOrFail($id);
        $input= $request->all();
        $positions->fill($input)->save();
        Session::flash('update','El registro se ha actualizado correctamente');

        return redirect()->route('position.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $positions = Position::FindOrFail($id);
        $positions->delete();
        Session::flash('delete','El registro se ha eliminado correctamente');
        return redirect()->route('position.index');
    }
}
