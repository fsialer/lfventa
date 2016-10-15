<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PersonRequest;
use App\Person;
use Laracasts\Flash\Flash;
class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customers=Person::search($request->name)->orderBy('id','desc')->where('type', 'cliente')->paginate(6);
        return view('admin.customers.index')->with('customers',$customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.customers.create');
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
        $provider->type='cliente';
        $provider->save();
        Flash::success("Se ha creado el cliente ".$provider->name.' de forma satisfactoria.')->important();
        return redirect()->route('customers.index');
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
        $customer=Person::find($id);
        return view('admin.customers.edit')->with('customer',$customer);
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
        $customer=Person::find($id);
        $customer->fill($request->all());
        $customer->save();
        Flash::warning('Se ha editado el cliente '.$customer->name.' con exito.')->important();
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer=Person::find($id);
        $customer->delete();      
        Flash::error('Se ha borrado el cliente '.$customer->name .' de forma exitosa.')->important();
        return redirect()->route("customers.index");
    }
}
