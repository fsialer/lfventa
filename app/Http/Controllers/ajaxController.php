<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Sale;
use App\Entry;
use App\Article;
class ajaxController extends Controller
{
    public function ajaxATSale(){
        if(\Request::ajax()){
            $sales=Sale::groupBy(DB::raw('YEAR(date_sale)'))->select(DB::raw('YEAR(date_sale) as date_sale'), DB::raw('sum(total) as total'))->orderBy('date_sale','asc')->get();
           return $sales;   
        }
    }
    
    public function ajaxSArticle(){
         if(\Request::ajax()){
            $articles=Article::all();
           return $articles;   
        }
    }
    public function ajaxATEntry(){
        if(\Request::ajax()){
            $entries=Entry::groupBy(DB::raw('YEAR(date_entry)'))->select(DB::raw('YEAR(date_entry) as date_entry'), DB::raw('sum(total) as total'))->orderBy('date_entry','asc')->get();
           return $entries;   
        }
    }
}