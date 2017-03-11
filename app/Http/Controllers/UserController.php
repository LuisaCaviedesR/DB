<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
     public function create(Request $request)
    {
        return view('users.create');
    }
}
