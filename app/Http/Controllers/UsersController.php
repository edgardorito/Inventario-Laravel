<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller{

  public function index(){

  }

  public function create(){

    return view('admin.users.create');

  }

  public function store(Request $request){
    $user = new User($request->all());
    $user->password = bcrypt($request->password);
    $user->save();
  }

  public function show(){

  }

  public function update(){

  }

  public function destroy(){

  }

  public function edit(){

  }

}