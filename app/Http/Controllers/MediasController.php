<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use Session;
use App\Http\Requests\CreateMediaRequest;
use App\Http\Requests\UpdateMediaRequest;

class MediasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::paginate(8);
        return view('media.index')->with('medias', $medias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMediaRequest $request)
    {
        Media::create($request->all());
        Session::flash('save','El registro se a guardado correctamente');
        return redirect()->route('media.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medias=Media::FindOrFail($id);
      return view('media.show')->with('medias',$medias);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medias = Media::FindOrFail($id);
        return view('media.edit')
            ->with('medias',$medias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaRequest $request, $id)
    {
        $medias = Media::FindOrFail($id);
        $input= $request->all();
        $medias->fill($input)->save();
        Session::flash('update','El registro se ha actualizado correctamente');

        return redirect()->route('media.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medias = Media::FindOrFail($id);
        $medias->delete();
        Session::flash('delete','El registro se ha eliminado correctamente');
        return redirect()->route('media.index');
    }
}
