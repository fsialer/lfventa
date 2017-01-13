<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;
use App\User;
use App\Entry;
use App\Person;
use App\Sale;
class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reports.index');
    }
    
    public function crearPDF($data,$vistaurl,$tipo){
        $datav=$data;
        $date=date('Y-m-d');
        $view= \View::make($vistaurl,compact('datav','date'))->render();
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        if($tipo==1){
            return $pdf->stream('reporte');
        }else{
            return $pdf->download('reporte.pdf');
        }
    }
    
    public function report_article($tipo){
        $vistaurl="admin.reports.articles.reporte_article";
        $articles=Article::all();
        return $this->crearPDF($articles,$vistaurl,$tipo);
    }
    public function report_entry($tipo){
        $vistaurl="admin.reports.entries.report_entry";
        $entries=Entry::all();
        $entries->each(function($entries){
            $entries->provider;
        });
        return $this->crearPDF($entries,$vistaurl,$tipo);
    }
    public function report_sale($tipo){
        $vistaurl="admin.reports.sales.report_sale";
        $sales=Sale::all();
        $sales->each(function($sales){
            $sales->customer;
        });
        return $this->crearPDF($sales,$vistaurl,$tipo);
    }
     public function report_customer($tipo){
        $vistaurl="admin.reports.customers.report_customer";
        $users=Person::all()->where('type','cliente');
        return $this->crearPDF($users,$vistaurl,$tipo);
    }
    public function report_user($tipo){
        $vistaurl="admin.reports.users.report_user";
        $users=User::all();
        return $this->crearPDF($users,$vistaurl,$tipo);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
