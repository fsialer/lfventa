<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Entry;
use App\Sale;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        \Carbon\Carbon::setlocale('es');
        
    }
    public function index()
    {
        $articles=Article::count();
        $entries=Entry::count();
        $sales=Sale::count();
        $users=User::count();
        
        ///////
        

        /////
        
        
        
        
        return view('welcome')->with('articles',$articles)->with('entries',$entries)->with('sales',$sales)->with('users',$users);
    }
}
