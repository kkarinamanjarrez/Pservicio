<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mean;
use Session;
use App\Http\Requests\CreateMeanRequest;
use App\Http\Requests\UpdateMeanRequest;

class MeansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $means = Mean::paginate(8);
        return view('mean.index')->with('means', $means);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mean.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMeanRequest $request)
    {
        Mean::create($request->all());
        Session::flash('save','El registro se a guardado correctamente');
        return redirect()->route('mean.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $means=Mean::FindOrFail($id);
      return view('mean.show')->with('means',$means);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $means = Mean::FindOrFail($id);
        return view('mean.edit')
            ->with('means',$means);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeanRequest $request, $id)
    {
        $means = Mean::FindOrFail($id);
        $input= $request->all();
        $means->fill($input)->save();
        Session::flash('update','El registro se ha actualizado correctamente');

        return redirect()->route('mean.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $means = Mean::FindOrFail($id);
        $means->delete();
        Session::flash('delete','El registro se ha eliminado correctamente');
        return redirect()->route('mean.index');
    }
}
