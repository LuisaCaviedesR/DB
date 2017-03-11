<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
class UserController extends Controller
{
    //
     public function create(Request $request)
    {
        return view('users.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required | string | alpha_dash | max:66',
            'email' => 'required | email',
            'password' => 'required | string | min:8 | max:64',
        ]);

        $input = $request->all();

        User::create($input);

        return redirect('/home');
    }
}
