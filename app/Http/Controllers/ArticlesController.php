<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Article;
use App\Category;
use Laracasts\Flash\Flash;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles=Article::search($request->name)->orderBy('id','desc')->paginate(6);
        $articles->each(function($articles){
            $articles->category;
        });
        return view('admin.articles.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::orderBy('name','ASC')->pluck('name', 'id');
        $categories->prepend('',0);
        //dd($categories);      
       return view('admin.articles.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $article=new Article($request->all());
        //dd($article);
        $article->save();
        
        Flash::success("Se ha creado el articulo ".$article->name.' de forma satisfactoria.')->important();
        return redirect()->route('articles.index');
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
        $article=Article::find($id);
        $categories=Category::orderBy('name','ASC')->pluck('name', 'id');
        $categories->prepend('',0);
        return view('admin.articles.edit')->with('article',$article)->with('categories',$categories);
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
        $article=Article::find($id);
        $article->fill($request->all());
        $article->save();
        Flash::warning('Se ha editado el articulo '.$article->name.' con exito.')->important();
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        $article->delete();
        Flash::error('Se ha borrado el articulo '.$article->name .' de forma exitosa.')->important();
        return redirect()->route("articles.index");
    }
}
