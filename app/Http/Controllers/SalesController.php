<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SaleRequest;
use App\Sale;
use App\Article;
use App\Person;
use App\Entry;
use App\User;
use Laracasts\Flash\Flash;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sales=Sale::search($request->num_voucher)->orderBy('id','desc')->paginate(6);
        $sales->each(function($sales){
            $sales->customer;
        });
        return view('admin.sales.index')->with('sales',$sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       $customers=Person::orderBy('name','ASC')->where('type','cliente')->pluck('name', 'id');       
       $articles=Article::orderBy('name','ASC')->where('stock','>',0)->pluck('name', 'id');
       $customers->prepend('',0);
       $articles->prepend('',0);
       return view('admin.sales.create')->with('customers',$customers)->with('articles',$articles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleRequest $request)
    {
       $sale=new Sale($request->all());
       $sale->date_sale=\Carbon\Carbon::now('America/Lima');
       $sale->user_id=\Auth::user()->id;
       $sale->tax=1.8;
       $sale->save();
       $data;
       foreach ($request->articles as $key => $value) {
          $data[$value]=['quantity'=>$request->quantity[$key],'discount'=>$request->discount[$key],'price_sale'=>$request->price_sale[$key]];
       }
       $sale->articles()->sync($data);
       Flash::success("Se ha creado la venta ".$sale->serie_voucher.'-'.$sale->num_voucher.' de forma satisfactoria.')->important();
       return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $sale=Sale::find($id);
         $sale->customer;
         $sale->articles;
         return view('admin.sales.show')->with('sale',$sale);
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
       $sale=Sale::find($id);
       $sale->state='cancelado';     
       foreach ($sale->articles as $art) {
            $article=Article::find($art->pivot->article_id);
            $article->stock= $article->stock + $art->pivot->quantity;
            $article->save();                     
        }    
       $sale->save();
       Flash::error("Se ha cancelado la venta ".$sale->serie_voucher.'-'.$sale->num_voucher.' de forma satisfactoria.')->important();
       return redirect()->route('sales.index');
    }

    public function loadop($id){
       if (\Request::ajax()) {
            $article=Article::find($id);            
            $article->entries;
            $article['avg']=$article->entries()->avg('price_sale');
            return $article;           
       }       
        
    }
    
}
