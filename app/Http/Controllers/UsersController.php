<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create() {
      //dd('hola esto es un mensaje');
      return view('admin.users.create');
    }
}
