<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\EntryRequest;
use App\Entry;
use App\Person;
use App\Article;
use Laracasts\Flash\Flash;

class EntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $entries=Entry::search($request->num_voucher)->orderBy('id','desc')->paginate(6);
        $entries->each(function($entries){
            $entries->provider;
        });
        return view('admin.entries.index')->with('entries',$entries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers=Person::orderBy('name','ASC')->where('type','proveedor')->pluck('name', 'id');
        $articles=Article::orderBy('name','ASC')->where('stock','>',0)->pluck('name', 'id');
        $providers->prepend('',0);
        $articles->prepend('',0);
        //dd($categories);      
       return view('admin.entries.create')->with('providers',$providers)->with('articles',$articles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntryRequest $request)
    {
       $entry=new Entry($request->all());
       $entry->date=\Carbon\Carbon::now('America/Lima');
       $entry->tax=1.8;
       $entry->save();
       $data;
       foreach ($request->articles as $key => $value) {
          $data[$value]=['quantity'=>$request->quantity[$key],'price_sale'=>$request->price_sale[$key],'price_buy'=>$request->price_buy[$key]];
       }
       $entry->articles()->sync($data);
       Flash::success("Se ha creado la compra ".$entry->serie_voucher.'-'.$entry->num_voucher.' de forma satisfactoria.')->important();
       return redirect()->route('entries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $entry=Entry::find($id);
         $entry->provider;
         $entry->articles;
         return view('admin.entries.show')->with('entry',$entry);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry=Entry::find($id);
        $entry->state='cancelado';        
        $entry->save();
        Flash::error("Se ha cancelado la compra ".$entry->serie_voucher.'-'.$entry->num_voucher.' de forma satisfactoria.')->important();
        return redirect()->route('entries.index');
    }
}
