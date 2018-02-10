<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracast\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $users = User::orderBy('id','ASC')->paginate(5);

    return view('admin.users.index')->with('users',$users);
  }

  public function create(){

    return view('admin.users.create');

  }

  public function store(UserRequest $request){
    $user = new User($request->all());
    $user->password = bcrypt($request->password);
    $user->save();

    Flash("Se ha registrado ". $user->name . " de forma existosa" )->success();
    return redirect()->route('users.index');
  }

  public function show(){

  }

  public function update(Request $request, $id){
    $user = User::find($id);
    $user->fill($request->all());
    $user->save();

    Flash("El usuario ". $user->name . " ha sido editado con exito" )->success();
    return redirect()->route('users.index');
  }

  public function edit($id){
    $user = User::find($id);
    return view('admin.users.edit')->with('user',$user);
  }

  public function destroy($id){
    $user = User::find($id);
    $user->delete();
    Flash("Se ha eliminado ". $user->name . "de forma existosa" )->error();
    return redirect()->route('users.index');

  }



}
