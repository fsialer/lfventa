<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PersonRequest;
use App\Person;
use Laracasts\Flash\Flash;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $providers=Person::search($request->name)->orderBy('id','desc')->where('type', 'proveedor')->paginate(6);
        return view('admin.providers.index')->with('providers',$providers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $request)
    {
        $provider=new Person($request->all());
        //dd($article);
        $provider->type='proveedor';
        $provider->save();
        Flash::success("Se ha creado el proveedor ".$provider->name.' de forma satisfactoria.')->important();
        return redirect()->route('providers.index');
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
        $provider=Person::find($id);
        return view('admin.providers.edit')->with('provider',$provider);
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
        $provider=Person::find($id);
        $provider->fill($request->all());
        $provider->save();
        Flash::warning('Se ha editado el proveedor '.$provider->name.' con exito.')->important();
        return redirect()->route('providers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provider=Person::find($id);
        $provider->delete(); 
        Flash::error('Se ha borrado el proveedor '.$provider->name .' de forma exitosa.')->important();     
        return redirect()->route("providers.index");
    }
}
