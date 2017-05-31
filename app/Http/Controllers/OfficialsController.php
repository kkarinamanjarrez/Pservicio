<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Official;
use App\Position;
use Session;
use App\Http\Requests\CreateOfficialRequest;
use App\Http\Requests\UpdateOfficialRequest;

class OfficialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officials = Official::
        select('officials.id', 'officials.name', 'officials.address', 'officials.phone', 'officials.name as officials',
            'positions.name as posit')
            ->join('positions','positions.id','=',
                'officials.positions_id')
            ->paginate(8);
        return view('official.index')->with('officials', $officials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions=Position::get()
        ->pluck('name','id')
        ->prepend('Seleccione un Cargo');
        return view('official.create')->with('positions',$positions);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOfficialRequest $request)
    {
        Official::create($request->all());
        Session::flash('save','El registro se a guardado correctamente');
        return redirect()->route('official.index');
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
        $officials=Official::FindOrFail($id);
        return view('official.show')
        //->with('medias',$medias)
        ->with('officials',$officials);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $positions=Position::get()->pluck('name','id')->prepend('Seleccione el medio de comunicacion');
        $officials = Official::FindOrFail($id);
        return view('official.edit')
            ->with('positions',$positions)
            ->with('officials',$officials);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfficialRequest $request, $id)
    {
        $officials = Official::FindOrFail($id);
        $input= $request->all();
        $officials->fill($input)->save();
        Session::flash('update','El registro se ha actualizado correctamente');

        return redirect()->route('official.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $officials = Official::FindOrFail($id);
        $officials->delete();
        Session::flash('delete','El registro se ha eliminado correctamente');
        return redirect()->route('official.index');
    }
}
