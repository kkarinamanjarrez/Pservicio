<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cases;
use App\Media;
use Session;
use App\Http\Requests\CreateCasesRequest;
use App\Http\Requests\UpdateCasesRequest;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cas= Cases::
        select('cases.id', 'cases.date', 'cases.date as cases',
            'media.name as medias')
            ->join('media','media.id','=','cases.medias_id')
        ->paginate(8);
        return view('cases.index')->with('cas', $cas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias=Media::get()
        ->pluck('name','id')
        ->prepend('Seleccione un Medio de Comunicacion');
        return view('cases.create')->with('medias',$medias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCasesRequest $request)
    {
        Cases::create($request->all());
        Session::flash('save','El registro se a guardado correctamente');
        return redirect()->route('cases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $medias=Media::get()->pluck('name','id');
        $cas=Cases::FindOrFail($id);
        return view('cases.show')
        //->with('medias',$medias)
        ->with('cas',$cas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medias=Media::get()->pluck('name','id')->prepend('Seleccione el medio de comunicacion');
        $cas = Cases::FindOrFail($id);
        return view('cases.edit')
            ->with('medias',$medias)
            ->with('cas',$cas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCasesRequest $request, $id)
    {
        $cas = Cases::FindOrFail($id);
        $input= $request->all();
        $cas->fill($input)->save();
        Session::flash('update','El registro se ha actualizado correctamente');

        return redirect()->route('cases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cas = Cases::FindOrFail($id);
        $cas->delete();
        Session::flash('delete','El registro se ha eliminado correctamente');
        return redirect()->route('cases.index');
    }
}
