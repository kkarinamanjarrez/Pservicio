<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attention;
use App\Cases;
use App\Mean;
use App\Official;
use Session;
use App\Http\Requests\CreateAttentionRequest;
use App\Http\Requests\UpdateAttentionRequest;

class AttentionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attentions= Attention::
        select('attentions.id', 'attentions.date', 'attentions.date as attentions',
            'cases.date as cases', 'means.name as means', 'officials.name as officials')
            ->join('cases','cases.id','=','attentions.cases_id')
            ->join('means','means.id','=','attentions.means_id')
            ->join('officials','officials.id','=','attentions.officials_id')
            ->paginate(8);
        return view('attention.index')->with('attentions', $attentions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cases=Cases::get()
        ->pluck('date','id')
        ->prepend('Seleccione un Caso');

        $means=Mean::get()
        ->pluck('name','id')
        ->prepend('Seleccione un Recurso');

        $officials=Official::get()
        ->pluck('name','id')
        ->prepend('Seleccione un Funcionario');
        
        return view('attention.create')
        ->with('cases',$cases)
        ->with('means',$means)
        ->with('officials', $officials);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAttentionRequest $request)
    {
        Attention::create($request->all());
        Session::flash('save','El registro se a guardado correctamente');
        return redirect()->route('attention.index');
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
        $attentions=Attention::FindOrFail($id);
        return view('attention.show')
        //->with('medias',$medias)
        ->with('attentions',$attentions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cas=Cases::get()->pluck('date','id')->prepend('Seleccione el Caso');
        $means=Mean::get()->pluck('name','id')->prepend('Seleccione el Recurso');
        $officials=Official::get()->pluck('name','id')->prepend('Seleccione el Funcionario');

        $attentions = Attention::FindOrFail($id);
        return view('attention.edit')
            ->with('cas',$cas)
            ->with('means',$means)
            ->with('officials', $officials)
            ->with('attentions', $attentions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttentionRequest $request, $id)
    {
        $attentions = Attention::FindOrFail($id);
        $input= $request->all();
        $attentions->fill($input)->save();
        Session::flash('update','El registro se ha actualizado correctamente');

        return redirect()->route('attention.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attentions = Attention::FindOrFail($id);
        $attentions->delete();
        Session::flash('delete','El registro se ha eliminado correctamente');
        return redirect()->route('attention.index');
    }
}
