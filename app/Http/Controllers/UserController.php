<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function view($id)
    {
       $user = User::find($id);
       dd($user);
    }
}
