<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList(){
      $users = User::orderBy('id', 'ASC');
      return view('usersList');
    }

    public function signIn(){
      return view('signIn');
    }
}
