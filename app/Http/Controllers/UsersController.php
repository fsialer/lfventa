<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserResetRequest;
use App\User;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->email);
        $users=User::search($request->name)->orderBy('id','DESC')->paginate(5);
        return view('admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user=new User($request->all());
        $user->password=bcrypt($user->password);
        $user->save();
        Flash::success("Se ha creado el usuario ".$user->name.' de forma satisfactoria.')->important();
        return redirect()->route('users.index');
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
        $user=User::find($id);
        return view('admin.users.edit')->with('user',$user);
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
        $user=User::find($id);
        $user->fill($request->all());
        $user->save();
        Flash::warning('Se ha editado el usuario '.$user->name.' con exito.')->important();
         return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        Flash::error('Se ha borrado el usuario '.$user->name .' de forma exitosa.')->important();
        return redirect()->route("users.index");
    }
    public function reset(){
         return view('admin.auth.passwords.reset');
    }
    //falta programar
    public function change(UserResetRequest $request){
        $user=User::find(\Auth::user()->id);
        $user->password=bcrypt($request->password);
        $user->save();
        Flash::warning('Se ha cambiado la contraseña de el usuario '.$user->name.' con exito.')->important();
        return redirect()->route('admin.dashboard');
    }
  
}
